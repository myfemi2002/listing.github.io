<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next, string ...$guards): Response
    // {
    //     $guards = empty($guards) ? [null] : $guards;

    //     foreach ($guards as $guard) {
    //         if (Auth::guard($guard)->check()) {
    //             return redirect(RouteServiceProvider::HOME);
    //         }
    //     }

    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {

                if(Auth::check() && Auth::user()->role == 'customer'){
                    return redirect('/customer/dashboard');
                }
                if(Auth::check() && Auth::user()->role == 'agent'){
                    return redirect('/agent/dashboard');

                }if(Auth::check() && Auth::user()->role == 'admin'){
                    return redirect('/admin/dashboard');
                }
            }
        }
        return $next($request);
    }



    // public function handle(Request $request, Closure $next, ...$guards)
    // {
    //     $guards = empty($guards) ? [null] : $guards;
    //     foreach ($guards as $guard) {
    //         if (Auth::guard($guard)->check()) {

    //             if(Auth::check() && Auth::user()->role == 'customer'){
    //                 return redirect('/customers/dashboard');
    //             }
    //             if(Auth::check() && Auth::user()->role == 'user'){
    //                 return redirect('/user/dashboard');
    //             }
    //             if(Auth::check() && Auth::user()->role == 'manager'){
    //                 return redirect('/manager/dashboard');

    //             }if(Auth::check() && Auth::user()->role == 'admin'){
    //                 return redirect('/admin/dashboard');
    //             }
    //         }
    //     }
    //     return $next($request);
    // }






}
