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

class HomeController extends Controller
{
    public function index()
    {
//        $maker = Maker::factory()->make(); //just generate instance of the model
//        $maker = Maker::factory()->create(); // generate & write to DB
//        $makers = Maker::factory()->count(10)->create(); // multi-rows

//        $users = User::factory()->count(10)
//            ->create([
//                'name' => 'Amer'
//            ]);// custom col=>val for records

//        $users = User::factory()
//            ->count(8)
//            ->state([
//                'name' => 'Mora'
//            ])
//            ->create();// custom col=>val for records

//        $users = User::factory()
//            ->count(4)
//            ->sequence(
//                ['name' => 'mario'],
//                ['name' => 'shown']
//            )
//            ->create();// custom sequence col=>val for records

//        $users = User::factory()
//            ->count(3)
//            ->sequence(function (Sequence $sequence) {
//                return ['email' => 'email' . $sequence->index . '@mail.com'];
//            })
//            ->create();//  sequence accept call-back function

//        $users = User::factory()
//            ->count(4)
//            ->unverified()
//            ->create();//  use a method in factory

//        $makers = Maker::factory()
//            ->count(2)
//            ->alternativeNames()
//            ->create();//  use a method in factory
//
//        User::factory()
//            ->afterCreating(function (User $user) {
//                dump($user); //do some code...
//            })
//            ->create();//  afterCreating & afterMaking call-back fun.

//        ## with relations ##
//        ## ONE_TO_MANY ##
//  #ERROR
//       Maker::factory()
//            ->count(3)
//            ->hasModels(4)
//            ->create(); //create 3 makers with 4 models (relation-name) for each maker

//        Maker::factory()->count(2)
//            ->hasModels(1, ['name' => 'Test'])
//            ->create(); //col=>val


//        User::factory()->count(2)
//            ->hasCars(1, function (array $attributes, User $user) {
//                return ['phone' => $user->phone];
//            })
//            ->create();

//        Maker::factory()->count(2)
//            ->hasModels(1, function (array $attributes, Maker $maker) {
//                return ['name' => $maker->name . '_maker-model-child'];
//            })
//            ->has(Model::factory()->count(3))
//            ->has(Model::factory()->count(3), 'relationName')
//            ->create();
//  #ERROR

//        $maker = Maker::factory()->craete();
//
//        Model::factory()
//            ->count(5)
//            ->for($maker)
////            ->forMaker(['name'=>'Lexus'])
////            ->for(Maker::factory()->state(['name'=>'Lexus']))
////            ->for(Maker::factory()->state(['name'=>'Lexus']), 'relationName ')
////            ->create();

        User::factory()
            ->has(Car::factory()->count(5), 'favoriteCars')
//            ->hasAttacted(Car::factory()->count(5), ['col1' => 'val'], 'favoriteCars')
            ->create();

        return view('home.index');
    }
}
