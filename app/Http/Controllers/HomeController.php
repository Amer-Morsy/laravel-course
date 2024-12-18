<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeatures;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $cars = Car::where('published_at', '<', now())
            ->orderBy('published_at', 'desc')
            ->with(['primaryImage', 'city', 'maker', 'model', 'carType', 'fuelType'])
            ->limit(30)
            ->get();

        return view('home.index', ['cars' => $cars]);
    }
}
