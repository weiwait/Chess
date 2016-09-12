<?php

namespace weiwait\OnlineChess\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class LoginStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            return $next($request);
        }
        echo 'login please';
        die;
    }
}
