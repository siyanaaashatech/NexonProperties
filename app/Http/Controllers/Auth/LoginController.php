<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\CustomerUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\UtilityFunctions;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        // Check if the email is not verified
        if ($user instanceof CustomerUser && !$user->hasVerifiedEmail()) {
            auth()->logout();

            return redirect()->route('verification.notice')
                             ->with('message', 'Please verify your email to access the dashboard.');
        }

        // Log login activity
        History::create([
            'description' => 'Logged in',
            'user_id' => Auth::user()->id,
            'type' => 0,
            'ip_address' => UtilityFunctions::getuserIP()
        ]);

        return redirect('/admin')->with('success', 'You are logged in!');
    }

    public function logout()
    {
        History::create([
            'description' => 'Logged out',
            'user_id' => Auth::user()->id,
            'type' => 0,
            'ip_address' => UtilityFunctions::getuserIP()
        ]);

        Auth::logout();

        return redirect('/login');
    }
}
