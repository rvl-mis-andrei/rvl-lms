<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if(!$request->expectsJson()){
            $route = match($request->segment(2)){
                'hrss' => 'sys_admin_login',
                'guest'        => 'guest_login',
                'mis'        => 'mis_login',
                default => false,
            };

            return route($route);
        }
    }
}
