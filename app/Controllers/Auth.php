<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Sign In',
            'css' => 'index.css'
        ];
        return view('auth/index', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Sign Up',
            'css' => 'register.css'
        ];
        return view('auth/register', $data);
    }

    public function resetpw()
    {
        $data = [
            'title' => 'Reset Ypur Password',
            'css' => 'resetpw.css'
        ];
        return view('auth/resetpw', $data);
    }

    public function forgetpw()
    {
        $data = [
            'title' => 'Forget Password?',
            'css' => 'forgetpw.css'
        ];
        return view('auth/forgetpw', $data);
    }
}
