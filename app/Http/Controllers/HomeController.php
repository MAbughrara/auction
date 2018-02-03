<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Car;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars=Car::all();
        $bestOffer=$cars->filter(function ($car){
            return !Car::hasBuyer($car);
        });
        $bestOffer=$bestOffer->sortBy('km')->sortBy('first_bid')->take(3);
        $closedBids=$cars->filter(function ($car){
            return Car::hasBuyer($car);
        });

        $brands=Brand::all();
        return view('home',compact('cars','brands','bestOffer','closedBids'));
    }
}
