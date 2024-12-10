<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        select all cars
//        select published  cars
//        select first published  car
//        select car of id 2
//        order cars desc on  published date
//        select 2 cars


//        insert data row manual

//        insert with methods & fillable

        $carData = [
            "maker_id" => 1,
            "model_id" => 3,
            "year" => 2020,
            "price" => 25000,
            "vin" => "1HGCM82633A123456",
            "mileage" => 15000,
            "car_type_id" => 2,
            "fuel_type_id" => 1,
            "user_id" => 5,
            "city_id" => 12,
            "address" => "123 Main Street",
            "phone" => "+1234567890",
            "description" => "A well-maintained vehicle with a clean record.",
            "published_at" => "2024-01-01 12:00:00",
            "created_at" => "2024-01-01 11:00:00",
            "updated_at" => "2024-01-01 11:30:00",
            "deleted_at" => null
        ];

        // Approach 1
//        $car = Car::create($carData);
       // Approach 2
//        $car2 = new Car();
//        $car2->fill($carData);
//        $car2->save();
        // Approach 3
//        $car3 = new Car($carData);
//        $car3->save();

        return view('car.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * @param Car $car
     * @return
     */
    public function show(Car $car)
    {
        return view('car.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param Car $car
     * @return
     */
    public function edit(Car $car)
    {
        return view('car.edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param Car $car
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param Car $car
     */
    public function destroy(Car $car)
    {
        //
    }

    public function search()
    {
        return view('car.search');
    }
}
