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
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;
        $role_url = [
            1 => ['default' => 'mis/dashboard'],
            2 => ['default' => 'hrss/dashboard'],
            3 => ['default' => 'guest/home'],
        ];

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // return redirect(RouteServiceProvider::HOME);
                return redirect($role_url[Auth::user()->account_role->role_id]['default']);
                exit(0);
            }
        }

        return $next($request);
    }
}
