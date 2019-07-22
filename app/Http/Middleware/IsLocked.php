<?php

namespace service_control\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsLocked
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
        if($request->user() != null){
            if($request->user()->status == 0){
                $request->session()->flush();                                
                return redirect()->back()->with('message', 'NO TIENES PERMISO PARA ACCEDER!'); 
            }                                                    
        }    
            return $next($request);        
    }
}
