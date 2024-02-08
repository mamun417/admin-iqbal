<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminRouteMiddleware
{
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Check if the authenticated user is an admin
            if (Auth::user()->type === 'admin') {
                return $next($request);
            }
        }

        return redirect()->back()->with('error', 'Unauthorized Access');
    }
}
