<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string|max:100',
            'password' => 'required|string|max:100',
        ]);

        $remember = $request->has('remember');
        
        if(Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            $token = Str::uuid();
            
            $user = auth()->user();
            $user->session_token = $token;
            $user->save();

            session(['session_token' => $token]);
            return redirect()->intended(route('dashboard'));
        }
        
        return redirect()->back()->with('error', 're-check your username/password');
    }
    
    public function logout(Request $request)
    {
        $user = Auth::user();

        if ($user) {
            $user->session_token = null;
            $user->save();
        }
    
        Auth::logout();
    
        $request->session()->forget('session_token');
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect(route('login'))->with('success', 'You have been logged out.');
    }
}
