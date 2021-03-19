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
            return redirect()->route('admin');
        } else if(Auth::User('status') == 'BEM') {
            return redirect()->route('bem');
        } else {
            return redirect()->route('userLogin');
        }
    }
}
