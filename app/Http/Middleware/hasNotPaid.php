<?php

namespace App\Http\Middleware;

use Closure;

class hasNotPaid
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
        if(\Auth::check() && \Auth::user()->paid != 1 ){
            
            return $next($request);
        }else{
            return redirect()->route('/')->with(array(
                'message' => 'Survey already Submitted', 
                'alert-type' => 'warning'
            ));
        }
    }
}
