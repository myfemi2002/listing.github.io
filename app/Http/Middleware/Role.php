<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }

    // public function handle(Request $request, Closure $next, $role): Response
    // {
    // if(auth()->user()->role == $role){
    //     return $next($request);
    // }
    // return new Response(view('errors.404'));
    // }

    public function handle(Request $request, Closure $next, $role): Response
    {
        if ($request->user()->role !== $role || $request->is('dashboard')) {
            abort(403, 'Access Denied');
        }

        return $next($request);
    }
}
