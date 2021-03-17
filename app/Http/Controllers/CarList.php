<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarList extends Controller
{
    public function carsView(){
        return view("/cars");
    }
}
