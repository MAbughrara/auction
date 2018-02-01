<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(){
        $cars=Car::all();
        dd($cars);
        if(request()->has('brand')){
            $cars->with();
        }



        return view('search',compact('cars'));
    }
}
