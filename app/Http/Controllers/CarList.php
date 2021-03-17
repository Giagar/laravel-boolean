<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarList extends Controller
{
    public function carsView(){
        $cars = Car::all();
        return view("/cars", ["cars"=>$cars]);
    }
}
