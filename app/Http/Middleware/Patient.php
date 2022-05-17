<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\Auth;


class Patient
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
        if(auth()->check() && Auth::user()->role == 4)
        {

        return $next($request);
        
        }
        
        return redirect('patient/login')->with('error',"Tu n'as pas accès à cette page.");
    }
}
