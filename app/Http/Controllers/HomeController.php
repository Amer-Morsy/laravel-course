<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\FuelType;
use App\Models\Maker;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

//Retrieve all Car records where the price is greater than $20,000.
//        $cars = Car::where('price', '>', 20000)->get();
//        dump($cars);
//Fetch the Maker details where the Maker name is 'Toyota'.
//        $r= Maker::where('name', 'Toyota')->first();
//        dump($r);
//Insert a new FuelType with the name 'Electric'.
//        $r = new FuelType(['name'=>'Electric']);
//        $r->save();
//        dump($r);

//        FuelType::create(['name'=>'Electric']);

//Update the price of the Car with id 1 to $15,000.
//        $r = Car::find(1);
//        $r->price = 15000;
//        $r->save();
//        dump($r);

//        Car::where('id', 1)->update(['price'=>15000]);

//Delete all Car records where the year is before 2020
//        Car::where('year', '<', '2020')->delete();



        //        select all cars
//        $cars = Car::all(['id','vin', 'price']);
//        $r = Car::get();
//        select published  cars
//        $cars = Car::where('published_at', '!=', null)->get();
//        select first published  car
//        $cars = Car::where('published_at', '!=', null)->first();
//        select car of id 2
//        $c = Car::find(2);
//        order cars desc on  published date
//        $r = Car::orderBy('published_at', 'desc')->get();
//        $r = Car::orderBy('id', 'desc')->get();
//        select 2 cars
//        $r = Car::where('maker_id', '!=', null)->orderBy('id', 'desc')->limit(2)->get();
//        dump($r);

//        insert data row manual
//        $car = new Car();
//
//        $car->maker_id = 1;
//        $car->model_id = 2;
//        $car->year = 2024;
//        $car->price = 50000;
//        $car->vin = '122024';
//        $car->mileage = 15000;
//        $car->car_type_id = 2;
//        $car->fuel_type_id = 3;
//        $car->user_id = 1;
//        $car->city_id = 2;
//        $car->address = '123 Main Street';
//        $car->phone = "+1234567890";
//        $car->description = "A well-maintained vehicle with a clean record.";
//        $car->published_at = "2024-12-01 12:00:00";
//        $car->created_at = "2024-11-01 12:00:00";
//        $car->updated_at = "2024-12-01 12:00:00";
//        $car->deleted_at = null;
//
//        $car->save();


//        insert with methods & fillable

//        $carData = [
//            "maker_id" => 1,
//            "model_id" => 1,
//            "year" => 2030,
//            "price" => 25000,
//            "vin" => "1HGCM82633A123456",
//            "mileage" => 15000,
//            "car_type_id" => 2,
//            "fuel_type_id" => 1,
//            "user_id" => 1,
//            "city_id" => 2,
//            "address" => "#79B Main Street",
//            "phone" => "+1234567890",
//            "description" => "A well-maintained vehicle with a clean record.",
//
//        ];

        // Approach 1
//        $car = Car::create($carData);
        // Approach 2
//        $car2 = new Car();
//        $car2->fill($carData);
//        $car2->save();
        // Approach 3
//        $car3 = new Car($carData);
//        $car3->save();

//        Update
//        $car = find(2);
//        $car->price = 222;
//        $car->save()

//        $car = Car::updateOrCreate(
//            ['vin'=>666, 'price'=>3333],
//            $carData
//        );

//        Car::where('published_at', null)->update(['published_at'=> now()]);

//        DELETE
//        $car= Car::find(3);
//        $car->delete();

//        Car::destroy(1,2);

//        Car::where('published_at', null)->delete();

//        Car::truncate(); //actual delete

//        $r= Car::get();
//        dump($r);
        return view('home.index');
    }
}
