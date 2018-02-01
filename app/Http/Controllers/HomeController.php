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
        $cars=Car::where('end_date','>',Carbon::now()->toDateTimeString())->get();

        $brands=Brand::all();
        return view('home',compact('cars','brands'));
    }
}
