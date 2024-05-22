<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;

class Cors
{
    /**
     * Handle an incoming HTTP request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, $next)
    {
        if ($request->isCors()) {
            return $next($request)
                ->withHeaders([
                    'Access-Control-Allow-Origin' => '*',
                    'Access-Control-Allow-Methods' => 'GET, HEAD, POST, PUT, DELETE',
                    'Access-Control-Allow-Headers' => 'Content-Type, X-Auth-Token, Authorization',
                ]);
        }

        return $next($request);
    }
}
