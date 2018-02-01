<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Car;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(){
        $cars=Car::all();
        $brands=Brand::all();

        if(!is_null(request('brand_id'))){
            $brand_id=request('brand_id');
            $cars= $cars->filter(function($car)use ($brand_id){
                return $car->brand_id==$brand_id;
            });
        }

        if(!is_null(request('status'))){
            $status=request('status');
            $cars= $cars->filter(function($car)use ($status){
                return $car->status==$status;
            });
        }

        if(!is_null(request('km'))){
            $km=request('km');
            $cars= $cars->filter(function($car)use ($km){
                return $car->km<$km;
            });
        }

        if(!is_null(request('from'))){
            $from=request('from');
            $cars= $cars->filter(function($car)use ($from){
                return $car->first_bid >=$from;
            });

        }

        if(!is_null(request('to'))){
            $to=request('to');
            $cars= $cars->filter(function($car)use ($to){
                return $car->first_bid <=$to;
            });
        }

        if(!is_null(request('year'))){
            $year=request('year');
            $cars= $cars->filter(function($car)use ($year){
                return $car->year<$year;
            });
        }



        return view('cars.searchResults',compact('cars','brands'));
    }
}
