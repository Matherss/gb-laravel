<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Страница входа',
        ];

        return view('auth', [
            'data' => $data
        ]);
    }
    public function login()
    {
        //
    }
}