<?php

namespace App\Http\Middleware;

use Closure;
// Para usar o Auth e seus metodos, precisa importar o namespace
use Illuminate\Support\Facades\Auth;

class PanelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle ($request, Closure $next, $guard = null) 
    {
        if (Auth::guard($guard)->check() && Auth::user()->admin == 1) {
            return $next($request);
        }
        return redirect('/home');
    }

}
