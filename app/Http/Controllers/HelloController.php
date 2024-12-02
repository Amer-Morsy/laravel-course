<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function welcome()
    {
        $data = ['name' => 'Amer', 'surname' => 'Morsy'];
        return view('hello.welcome', ['name' => $data['name'], 'surname' => $data['surname']]);
    }
}
