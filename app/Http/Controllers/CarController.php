<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use function Illuminate\Database\Eloquent\Relations\paginate;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $cars = User::find(5)
        $cars = User::find(1)
            ->cars()
            ->with(['primaryImage', 'maker', 'model'])
            ->latest()
//            ->get();
//            ->paginate(15)
//        ->withPath('/user/car')
//        ->append(['sort'=>'price'])
//        ->withQueryString()
//        ->fragment('carsId');
            ->simplePaginate(15);

//        // If the request URL looks like this:
//// http://localhost:8000/car/1?page=1
//        dump($request->path()); // Output: car/1
//        dump($request->url()); // Output: http://localhost:8000/car/1
//        dump($request->fullUrl()); // Output: http://localhost:8000/car/1?page=1
//        dump($request->method()); // Output: GET
//        if ($request->isMethod('post')) {
//            // If the request method is POST
//        }
//        if ($request->isXmlHttpRequest()) {
//            // If the request is an AJAX request
//        }
//        if ($request->is('admin/*')) {
//            // If the request URL matches the pattern admin/*
//        }
//        if ($request->routeIs('admin.*')) {
//            // If the request URL matches the pattern admin.*
//        }
//        if ($request->expectsJson()) {
//            // If the request expects JSON response
//        }
//        dump($request->fullUrlWithoutQuery(['sort' => 'price']));
//        dump($request->fullUrlWithoutoutQuery(['page']));
//        dump($request->host());
//        dump($request->httpHost());
//        dump($request->schemeAndHttpHost());
//        dump($request->header());
//        dump($request->bearerToken());
//        dump($request->ip());
//
        return view('car.index', ['cars' => $cars]);
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
        return view('car.show', ['car' => $car]);
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
        $query = Car::where('published_at', '<', now())
            ->with(['primaryImage', 'city', 'maker', 'model', 'carType', 'fuelType'])
//            ->orderBy('published_at', 'desc'); //=
            ->latest('published_at');

//        $query->join('cities', 'cities.id', '=', 'cars.city_id')
//            ->where('cities.state_id', 1);

//        $carCount = $query->count();
//
//        $cars = $query->limit(30)->get();

        $cars = $query->paginate(5);

        return view('car.search', ['cars' => $cars]);
    }

    public function watchList()
    {
        $cars = User::find(4)
            ->favoriteCars()
            ->with(['primaryImage', 'city', 'maker', 'model', 'carType', 'fuelType'])
//            ->get()
            ->paginate(15);

        return view('car.watchList', ['cars' => $cars]);
    }
}
