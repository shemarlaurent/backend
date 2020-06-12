<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAbyssUser
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'abyss_user')
    {
        if (Auth::guard($guard)->check()) {
            return redirect()->route('abyssuser.dashboard');
        }

        return $next($request);
    }

}
