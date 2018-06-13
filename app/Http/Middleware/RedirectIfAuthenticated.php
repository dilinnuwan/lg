<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            Auth::logout();
            return redirect('/login')->with('success','An email has been sent to your email address. It can take a few minutes before you have it in your inbox. Click the activation link to verify your account!');
        }

        return $next($request);
    }
}
