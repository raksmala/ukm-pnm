<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class isBEM
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
        if(Auth::User() != null){
            if(Auth::User()->status == 'BEM') {    
                return $next($request);
            } else if(Auth::User()->status == 'UKM') {
                return redirect()->secure('/admin');
            }
        }

        return redirect()->secure('/');
    }
}
