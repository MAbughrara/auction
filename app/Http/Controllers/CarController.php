<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Car;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars=Car::all();
        return view('cars.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands=Brand::all();
        return view('cars.create',compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car= new Car();
        $car->seller_id=auth()->user()->id;
        $car->brand_id=request('brand_id');
        $car->status=request('status');
        $car->km=request('km');
        $car->first_bid=request('first_bid');
        $car->notes=request('notes');
        $car->end_date=request('end_date');
        $car->year=request('year');
        $car->save();

        if ($request->has('images')) {
            $files = $request->file('images');
            foreach($files as $key=>$file){
          Storage::putFileAs('public/'.$car->id, $file,$key.'.jpg');
        }
        }
        return redirect("/cars/$car->id");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
//        dd($car->lastBidder()->name);
        $images= Storage::files('public/'.$car->id);
//        $r = $car->seller()->getResults();
//        dd($r->name);
        return view('cars.show',compact('car'),compact('images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('cars.edit',compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Car $car)
    {
        return redirect('/cars/edit',$car->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
