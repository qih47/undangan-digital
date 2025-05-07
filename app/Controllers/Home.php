<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('auth/login', [
            'config' => config('Auth'),
        ]);
    }
    
    public function register(): string
    {
        return view('auth/register');
    }
}
