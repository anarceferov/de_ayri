<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAdmin
{

    public function handle(Request $request, Closure $next)
    {
        if(!Auth::check()){
            return redirect()->route('dashboard.login.index');
        }
        return $next($request);
    }
}
