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
            ->limit(30)
            ->get();

        //## Query Data - Different Methods ##
//        $cars = DB::table('cars')->get();
//        $query = Car::query(); //use any methods from query class : where, orderBy, limit etc..
//        $cars= Car::get(); //select all records
//        $car= Car::first(); //select single record
//        $highestPrice= Car::orderBy(
//            'price', 'desc'
//        )->value('price'); //select a single value

//        ##select list of values of a single column
//        $prices = Car::orderBy(
//            'price', 'desc'
//        )->pluck('price'); //[p1, p2, ..]

//          $prices = Car::orderBy(
//            'price', 'desc'
//        )->pluck('price', 'id'); //['1'=>'p1', '2'=>'p2', ..]

//        ##check if records exists
//        if(Car::where('user_id', 1)->exists()){
//            //user has cars
//        }

//        if(Car::where('user_id', 1)->doesntExists()){
//            //user does not have cars
//        }

//        ##specify select
//        // Select only vin code and price of the cars
//        $cars = Car::select('vin', 'price as car_price')->get();
//        // You can also add another columns in select at later stage
//        $query = Car::select('vin', 'price as car_price');
//        // Each car will have 3 columns selected: vin, price with name car price and mileage
//        $cars = $query->addSelect('mileage')->get();

        // Select distinct maker and models from the cars
//        $distinct = Car::select('maker_id', 'model_id')
//            ->distinct()->get();

        // Using limit and offset. Select 10 cars starting from 6th
//        $cars = Car::limit(10)->offset(5)->get();
//        // The same as above. Using skip and take. Skip 5 cars and take 10
//        $cars = Car::skip(5)->take(10)->get();

        // Select number of published cars
//        $carCount = Car::where('published_at', '!=', null)
//            ->count();

        // Select minimum and maximum and average price of the cars
//        $minPrice = Car::where('published_at', '=', null)
//            ->min('price');
//        $maxPrice = Car::where('published_at', '!=', null)
//            ->max('price');
//        $avgPrice = Car::where('published_at', '!=', null)
//            ->avg('price');
//        dd($minPrice, $maxPrice, $avgPrice);

//        // Select car IDs with how many images each car has
//        $cars = CarImage::selectRaw('car_id, count (*) as image_count')
//            ->groupBy('car_id')
//            ->get();
//        dd($cars [0]);

        return view('home.index', ['cars' => $cars]);
    }
}
