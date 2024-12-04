<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class HomeController extends Controller
{
    public function index()
    {

     return view('home.index', [
            'hobbies' => '["coding","reading"]',
            'bold' => '<h1 class="red">Mr.Amer</h1>',
            'name' => 'Amer',
            'surname' => 'Elsayed'
        ]);

//        return view('home.index')
//            ->with('name','Amer')
//            ->with('surname','Amer')
//            ;

//        if (!View::exists('home')) {
//            dump('home view not exists');
//        }
//        return View::first(['home', 'home.index']);
    }
}
