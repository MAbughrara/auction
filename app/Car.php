<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function bids(){
        return  $this->hasMany(Bid::class);
    }
    public function seller(){
        return  $this->belongsTo(User::class,'seller_id');
    }
    public function buyer(){
        return $this->belongsTo(User::class,'buyer_id');
    }

}
