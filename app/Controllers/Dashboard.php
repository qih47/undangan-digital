<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        return view('dashboard/index', [
            'config' => config('Auth'),
        ]);
    }
}
