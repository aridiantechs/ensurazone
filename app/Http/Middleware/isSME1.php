<?php

namespace App\Http\Middleware;

use Closure;

class isSME1
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
        if(\Auth::check() && \Auth::user()->hasRole("sme-1") ){ 
            return $next($request);
        }else{
            return redirect()->route('login');
        }
    }
}
