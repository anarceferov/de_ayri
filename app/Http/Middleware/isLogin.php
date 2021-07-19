<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Closure;

class isLogin
{

    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            return redirect()->route('dashboard.');
        }
        return $next($request);
    }
}