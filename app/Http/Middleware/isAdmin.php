<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;                //Necesaria para la validacion del if

class isAdmin
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
       if(Auth::check() && Auth::user()->role=='admin') //verificamos que el usuario se haya logueado y sea admin
          return $next($request);
      
        return redirect('/home')->with('alert', 'Permisos Insuficientes!');;
    }
}
