<?php

namespace App\Http\Middleware;

use Closure;

class PanelMilddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $dados = Auth::guard($guard);
        dd($dados);
        
        return $next($request);
    }
}
