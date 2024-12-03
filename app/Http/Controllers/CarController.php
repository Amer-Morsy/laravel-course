<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function __invoke()
    {
        return "from  Car Controller __invoke ";
    }

    public function index()
    {
        return "index from car controller";
    }
}
