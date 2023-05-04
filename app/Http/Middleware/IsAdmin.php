<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     * 
     * @param \Illuminate\support\Facades\Auth $Auth
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * 
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (!Auth()->check() || !Auth()->user()->as_admin !=1) 
        {
            abort(code: 403);
        }
        //if(Auth()->check() && Auth()->user()->as_admin =1)
        //{
        //    //return redirect(RouteServiceProvider::HOME);
        //    return redirect('admin/dashboard');
        //}
        
        return $next($request);
    }
}
