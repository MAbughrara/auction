<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Car;
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
        $brands=Brand::all();
        return view('home',compact('cars','brands'));
    }
}
