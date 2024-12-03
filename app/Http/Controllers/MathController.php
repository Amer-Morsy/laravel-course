<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function sum($a, $b)
    {
        $r = $a + $b;
        return "$a" . "+" . "$b = $r";
    }

    public function subtraction($a, $b)
    {
        $r = $a - $b;
        return "$a" . "-" . "$b = $r";
    }
}
