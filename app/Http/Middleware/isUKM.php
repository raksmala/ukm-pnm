<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class isUKM
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
        if(Auth::check() && Auth::User()->status == 'UKM') {    
            return $next($request);
        } else if(Auth::check() && Auth::User()->status == 'BEM') {
            return redirect()->secure()->route('bem');
        } else {
            return redirect()->secure()->route('user');
        }
    }
}
