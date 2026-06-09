<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserOnlyMiddleware
{
    public function handle($request, Closure $next)
{
    if (!auth()->check()) {
        abort(403);
    }

    if (auth()->user()->role !== 'user') {
        abort(403);
    }

    return $next($request);
}
}