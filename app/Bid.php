<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
//    protected $guarded=[];
    public function car(){
        return $this->belongsTo(Car::class);
    }

    public static function getLastBid(Car $car){
        if (!isset($car->lastBid()->bid_val)){
            return null;
        }
        return $car->lastBid()->bid_val;
    }
}