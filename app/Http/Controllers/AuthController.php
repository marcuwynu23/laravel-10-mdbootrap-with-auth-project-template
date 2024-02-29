<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login()
    {
        try {
            return view('auth.login');
        } catch (\Throwable $th) {
            Log::error($th);
            return redirect()->route('auth.login')->with('error', 'An error occurred');
        }
    }

    public function postLogin(){
        try {
            $credentials = request()->only('email', 'password');
            Log::info($credentials);
            if (auth()->attempt($credentials)) {
                Log::info('User logged in');
                return redirect()->route('app.home');
            }

            Log::info('Invalid credentials');
            return redirect()->route('auth.login')->with('error','Server error occurred. Please try again later.');
        } catch (\Throwable $th) {
            Log::error($th);
            return redirect()->route('auth.login')->with('error', 'Invalid credentials');
        }
    }

    public function logout()
    {
        try {
           auth()->logout();
           return redirect()->route('auth.login');
        } catch (\Throwable $th) {
            Log::error($th);
            return redirect()->route('app.home')->with('error', 'An error occurred');
        }

    }

    public function register() 
    {
       try {
            return view('auth.register');
       } catch (\Throwable $th) {
            Log::error($th);
            return redirect()->route('auth.register')->with('error', 'An error occurred');
       }
    }

    public function recovery()
    {
       try {
        return view('auth.recovery');
       } catch (\Throwable $th) {
        Log::error($th);
        return redirect()->route('auth.recovery')->with('error', 'An error occurred');
       }
    }

    public function recoveryConfirmation()
    {
        try {
            return view('auth.recovery-confirmation');
        } catch (\Throwable $th) {
            Log::error($th);
            return redirect()->route('auth.recovery-confirmation')->with('error', 'An error occurred');
        }
    }
}
