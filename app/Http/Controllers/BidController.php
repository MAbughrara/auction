<?php

namespace App\Http\Controllers;

use App\Bid;
use App\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function add(Car $car){
//        dd(request()->all());
        if(request('bid_val') <1){ return redirect()->back();}
        $bidVal=$car->first_bid;
        if(isset($car->lastBid()->bid_val)){
            $bidVal=$car->lastBid()->bid_val;
        }
        $bid=new Bid();
        $bid->car_id=$car->id;
        $bid->bidder_id=Auth::user()->id;
        $bid->bid_val=request('bid_val')+$bidVal;
        $bid->save();
        return redirect()->back();
    }

    public function getLastBid(Car $car){

        return $car->lastBid()->bid_val;
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
