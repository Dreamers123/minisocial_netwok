<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class EditorMiddleware
{

    public function handle($request, Closure $next)
    {
        foreach (Auth::user()->role as $role) {
            if ($role->name == 'Editor') {
                return $next($request);
            }
        }

        return redirect('');
    }
}
