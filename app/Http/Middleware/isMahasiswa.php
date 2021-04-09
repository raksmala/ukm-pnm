<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class isMahasiswa
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
        if(Auth::guard('mahasiswa')->user('NIM') != null) {    
            return $next($request);
        } else if(Auth::User('status') == 'ukm') {
            return redirect()->secure('/admin');
        } else if(Auth::User('status') == 'BEM') {
            return redirect()->secure('/bem');
        } else {
            return redirect()->secure('/login/user');
        }
    }
}
