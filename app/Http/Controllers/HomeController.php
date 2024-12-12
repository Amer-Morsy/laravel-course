<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeatures;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

//        ## ONE_TO_ONE ###
        //        $car = Car::find(1);
//        dump($car->features, $car->primaryImage);
//        $car->features->abs=0;
//        $car->features->save();
//        $car->features->update(['abs' => 1, 'air_conditioning' => 0]);
//        dump($car->features);
//        $car->primaryImage->delete();
//
//        $car_features = new CarFeatures([
//            "cruise_control" => false,
//            "abs" => false,
//            "air_conditioning" => false,
//            "power_windows" => false,
//            "power_door_locks" => true,
//            "bluetooth_connectivity" => true,
//            "remote_start" => false,
//            "gps_navigation" => true,
//            "heater_seats" => false,
//            "climate_control" => true,
//            "rear_parking_sensors" => true,
//            "leather_seats" => false
//        ]);
//
//        $car = Car::find(4);
//        $car->features()->save($car_features);


//       ### ONE_TO_MANY ###
//        $car = Car::find(1);
//        dump($car->images);

//        CREATE
//        $car->images()->save(new CarImage(['images_path' => 'some-thing', 'position' => 3]));
//        $car->images()->create(['images_path' => 'some-thing1', 'position' => 4]);

//        Car::find(2)->images()
//            ->saveMany([
//                new CarImage(['images_path' => 'some-thing2', 'position' => 5]),
//                new CarImage(['images_path' => 'some-thing3', 'position' => 6])
//            ]);
//
//        $car->images()
//            ->createMany([
//                ['images_path' => 'some-thing4', 'position' => 7],
//                ['images_path' => 'some-thing5', 'position' => 8],
//            ]);


//        ### MANY_TO_ONE ###
//        $car = Car::find(1);
//        dd($car->carType);

//        return (
//        Car::whereBelongsTo(
//            CarType::where('name', 'Jeep')->first()
//        )->get()
//        );

//        $hatchType = CarType::where('name', 'Hatchback')->first();

//        $carsOfHatch = Car::WhereBelongsTo($hatchType)->get();
//        $carsOfHatch = $hatchType->cars;

//        return($carsOfHatch);

//        $car = Car::find(1);
//        $suvType = CarType::where('name', 'SUV')->first();
//
//        $car->car_type_id = $suvType->id;
//        $car->save();

//        $car = Car::find(1);
//        $jeepType = CarType::where('name', 'Jeep')->first();
//        $car->carType()->associate($jeepType);
//        $car->save();
//
//        return ($car->carType);

//        ## MANY_TO_MANY ###
//        $car = Car::find(1);
//        dd($car->favoritedUsers);

//        $user = User::find(1);
//        dd($user->favoriteCars);

        $user = User::find(1);
//        $user->favoriteCars()->attach([3,4]);
//        $user->favoriteCars()->attach([3,4], ['col1'=>'val']);

//        $user->favoriteCars()->detach([3]);
//        $user->favoriteCars()->detach(); //detach all

//        $user->favoriteCars()->sync([5,6]);
//        $user->favoriteCars()->syncWithPivotValues([5,6], ['col1'=>'val']);

        return($user->favoriteCars);

        return view('home.index');
    }
}
