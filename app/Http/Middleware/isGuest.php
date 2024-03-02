<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isGuest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $access = Auth::user()->account_role;

            if($access->role_id == 3 && $access->status == 1){
                return $next($request);
                exit(0);
            }

            $route = match($access->role_id){
                1 => ['default' => 'mis/dashboard'],
                2 => ['default' => 'hrss/dashboard'],
                3 => ['default' => 'guest/home'],
                default => false,
            };
            
            return redirect()->route($route);
        }
    }
}
