<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PreventAuthenticatedAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Auth::logout();

        if (Auth::check()) {
            $role_url = [
                1 => ['default' => 'mis/dashboard', 'route'=>'mis_login'],
                2 => ['default' => 'hrss/dashboard', 'route'=>'hrss_login'],
                3 => ['default' => 'guest/home', 'route'=>'guest_login'],
            ];

            return redirect($role_url[Auth::user()->account_role->role_id]['default']);
            exit(0);
        }

        return $next($request);
    }
}
