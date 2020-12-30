<?php

namespace App\Http\Middleware;

use Closure;

class hasGroundProofPlan
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
        if(\Auth::check() && \Auth::user()->ground_proof()->exists() && \Auth::user()->ground_proof->first()->paid ==1 ){
            
            return $next($request);
        }else{
            return redirect()->route('/')->with(array(
                'message' => 'Access Denied', 
                'alert-type' => 'error'
            ));
        }
    }
}
