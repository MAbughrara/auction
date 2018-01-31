<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded=[];

    public function bids(){
        return  $this->hasMany(Bid::class);
    }

    public function brand(){
        return  $this->belongsTo(Brand::class);
    }

    public function seller(){
        return  $this->belongsTo(User::class,'seller_id');
    }

    public function buyer(){
        return $this->belongsTo(User::class,'buyer_id');
    }

    public function setYearAttribute($value)
    {
        $this->attributes['year']=Carbon::createFromDate($value, 01, 01, 01);
    }
    public function getYearAttribute($value)
    {
        return Carbon::parse($value)->year;
    }
    public function setEndDateAttribute($value)
    {
        $this->attributes['end_date']=Carbon::parse($value);
    }
    public function getEndDateAttribute($value)
    {
        return Carbon::parse($value);
    }

    public function lastBid()
    {
        if(!isset($this->bids()->get()->last()->bidder_id)){
            return null;
        }
       return $this->bids()->get()->last();
    }

    public function lastBidder()
    {
        if(!isset($this->bids()->get()->last()->bidder_id)){
            return null;
        }
       return User::find($this->bids()->get()->last()->bidder_id);
    }

    public static function allPurchases(User $user){
        return Car::where('buyer_id',$user->id)->get();
    }
}
