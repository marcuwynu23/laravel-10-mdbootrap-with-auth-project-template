<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function recovery()
    {
        return view('auth.recovery');
    }

    public function recoveryConfirmation()
    {
        return view('auth.recovery-confirmation');
    }
}
