<?php

namespace App\Http\Middleware;

use Closure;

class HeenaSession
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
        if (!$request->session()->exists('pengguna')) {
           
            return redirect('login');
        
        }

        return $next($request);
    }
}
