<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next) //middleware to check if the user roles is 0 or 1 for admin
    {
        if(Auth::check())
        {
            if(Auth::user()->role_as ==1) //is admin
            {
                return $next($request); //handle request
            }
            else
            {
                return redirect('/home')->with('status','Access Denied! You are not admin');
            }
        }
        else
        {
            return redirect('/login')->with('status','Please login first');
        }
        
    }
}
