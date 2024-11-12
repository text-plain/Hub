<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }



    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user) {
            // Log the user in without a password
            Auth::login($user);

            // Redirect to the intended location or dashboard
            return redirect()->intended('dashboard');
        } else {
            return redirect()->back()->withErrors(['email' => 'User not found']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}


