<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureEmailIsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is logged in and if the user is an instance of CustomerUser and not verified
        if (Auth::check() && $request->user() instanceof \App\Models\CustomerUser && !$request->user()->hasVerifiedEmail()) {
            // Logout the user
            Auth::logout();

            // Redirect to a verification notice page with a message
            return redirect()->route('verification.notice')->with('message', 'Please verify your email address to access the dashboard.');
        }

        return $next($request);
    }
}
