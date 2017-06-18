<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth

class IsRoleBHAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Reques $request, Closure $next)
    {
        if(!Auth::check() or $request->user()->role!='admin') {
            
            return redirect('unauthorized');
        }
        return $next($request);
    }
}
