<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    /**Show Login Page */

    public function login(){
        return view('index');
    }

    /**Authenticate User */

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return response()->json([
                'status' => 1,
                'message' => 'User loged in successfully!'
                ]);
        }

        return response()->json([
            'status' => 0,
            'message' => 'The provided credentials do not match our records.',
        ]);
    }

    /**Logout User */

    public function logout(Request $request){
         Auth::logout();

         $request->session()->invalidate();

         $request->session()->regenerateToken();

         return redirect('/');
    }
}
