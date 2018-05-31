<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class RUser
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
        //dd(Auth::user());
        if (Auth::check() && !Auth::user()->is_admin() )
        {
            return $next($request);
        }

        return redirect('/no-rights-admin');
    }
}
