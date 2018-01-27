<?php

namespace App\Http\Controllers;

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
        return view('cars.create');
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
        $car->model=request('model');
        $car->status=request('status');
        $car->notes=request('notes');
        $car->km=request('km');
        $car->first_bid=request('first_bid');
        $car->model=request('model');
        $car->notes=request('note');
        $car->end_date=Carbon::now();
        $car->year=Carbon::now()->subDay();
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
        $images= Storage::files('public/'.$car->id);

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
