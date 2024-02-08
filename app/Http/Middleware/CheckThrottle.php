<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Cache\RateLimiter;

class CheckThrottle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    protected $limiter;

    public function __construct(RateLimiter $limiter)
    {
        $this->limiter = $limiter;
    }

    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();
        $key = "login_throttle_$ip";

        if ($this->limiter->tooManyAttempts($key, 5, 3 * 60)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Too many login attempts. Try again later.',
                'payload' => 'throttle',
            ], 429)->throwResponse();
        }

        return $next($request);
    }
}
