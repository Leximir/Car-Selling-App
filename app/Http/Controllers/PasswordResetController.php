<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordResetController extends Controller
{
    public function showForgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function forgotPassword()
    {

    }

    public function showResetPassword(string $token)
    {
        return view('auth.reset-password',[
            'token' => $token
        ]);
    }

    public function resetPassword()
    {

    }
}
