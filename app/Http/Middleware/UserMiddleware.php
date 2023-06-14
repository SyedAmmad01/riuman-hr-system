<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->status)
        {
            $banned = Auth::user()->status == "1";
            Auth::logout();

            if($banned == 1){
                $message = 'Your Accout Has Been Deactivated.Please Contact The Administrator.';
            }
            return redirect()->route('login')
            ->with('status' , $message)
            ->withErrors(['email' => 'Your Accout Has Been Deactivated.Please Contact The Administrator.']);
        }
        return $next($request);
    }
}
