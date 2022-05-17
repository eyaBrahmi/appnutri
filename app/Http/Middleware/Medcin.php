<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Medcin
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
        if(auth()->check() && Auth::user()->role == 2)
        {

        return $next($request);
        
        }
        
        return redirect('medecin/login')->with('error',"Tu n'as pas accès à cette page.");
    }
 }