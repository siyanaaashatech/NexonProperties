<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\CustomerUser; // Import the CustomerUser model
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                // Modify unique validation to check `users` table only
                'unique:users,email',
                // Custom rule to check `customer_usertable` separately
                function ($attribute, $value, $fail) {
                    if (\App\Models\CustomerUser::where('email', $value)->exists()) {
                        $fail('The email has already been taken.');
                    }
                },
            ],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User|\App\Models\CustomerUser
     */
    protected function create(array $data)
    {
        // Check if the registration is for CustomerUser (modify this condition as needed)
        $isCustomerUser = $this->isCustomerUser($data);

        if ($isCustomerUser) {
            // Creating a CustomerUser instance and saving in the customer_usertable
            $user = CustomerUser::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            // Send verification email for CustomerUser
            if ($user instanceof CustomerUser) {
                $user->sendEmailVerificationNotification();
            }
        } else {
            // Creating a regular User instance and saving in the users table
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        }

        return $user;
    }

    /**
     * Redirect the user after registration based on verification status.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User|\App\Models\CustomerUser  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function registered(Request $request, $user)
    {
        // Redirect to verification notice if the user is a CustomerUser
        if ($user instanceof CustomerUser && !$user->hasVerifiedEmail()) {
            // Log out the user to prevent access before verification
            auth()->logout();

            // Redirect to the verification notice page with a message
            return redirect()->route('verification.notice')->with('message', 'Please verify your email address to access the dashboard.');
        }

        // Redirect to home or dashboard for verified users
        return redirect($this->redirectPath());
    }

    /**
     * Determine if the registration is for a CustomerUser.
     *
     * @param array $data
     * @return bool
     */
    private function isCustomerUser(array $data)
    {
        // Implement your logic to identify if the registration should be for CustomerUser
        // For example, based on form data or specific conditions
        return isset($data['user_type']) && $data['user_type'] === 'customer';
    }
}
