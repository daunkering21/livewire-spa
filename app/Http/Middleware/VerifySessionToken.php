<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class VerifySessionToken
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $userToken = Auth::user()->session_token;
            $sessionToken = (string) session('session_token');
    
            if ($userToken !== $sessionToken) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
    
                return redirect(route('login'))->with('error', 'You have been logged out because your account was accessed from another device.');
            }
        }
        
        return $next($request);
    }
}
