<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $role=null)
    {
        if(Auth::check()) {
            if($request->user()->role->id === 1) {
                return $next($request);
            }
            if($request->user()->role->name === $role) {
                return $next($request);
            }
            return redirect()->route($request->user()->role->name);
        }
        return redirect()->route('login')->with("login-fail", "Bạn chưa đăng nhập");
    }
}
