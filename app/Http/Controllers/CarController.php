<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function allCars () {
        // recieveing data form car model
        $cars = Car::all();

        // check the data
        // dd($cars);

        // sending the data to the view
        return view("cars",[
            'vehicles' => $cars
        ]);
    }
}
