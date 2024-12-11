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
