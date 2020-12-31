<?php

namespace App\Http\Middleware;

use Closure;

class hasBackendAccess
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
        if(\Auth::check() && (\Auth::user()->hasAnyRole("superadmin|sme-1|sme-2") )){ 
            return $next($request);
        }else{
            return redirect()->route('login');
        }
    }
}
