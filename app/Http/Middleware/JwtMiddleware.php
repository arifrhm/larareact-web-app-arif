<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class JwtMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    protected $middlewareGroups = [
        'api' => [
            // ...
            \App\Http\Middleware\JwtMiddleware::class,
        ],
    ];
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
