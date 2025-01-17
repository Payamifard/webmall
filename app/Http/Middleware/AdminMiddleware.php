<?php

namespace App\Http\Middleware;

// bayad dar kernel an ra moarefi koni
//dar logincontroller ham minevisim agar admin nabud che konad

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        if(!Auth::user()->role_as==1){

            return redirect('/home')->with('status','Access Denied As You Are Not Admin');

        };
        return $next($request);
    }
}
