<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded = [];

    public function bids()
    {
        return $this->hasMany(Bid::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function setYearAttribute($value)
    {
        $this->attributes['year'] = Carbon::createFromDate($value, 01, 01, 01);
    }

    public function getYearAttribute($value)
    {
        return Carbon::parse($value)->year;
    }

    public function setEndDateAttribute($value)
    {
        $this->attributes['end_date'] = Carbon::parse($value);
    }

    public function getEndDateAttribute($value)
    {
        return Carbon::parse($value);
    }

    public function lastBid()
    {
        if (!isset($this->bids()->get()->last()->bidder_id)) {
            return null;
        }
        return $this->bids()->get()->last();
    }

    public function lastBidder()
    {
        if (!isset($this->bids()->get()->last()->bidder_id)) {
            return null;
        }
        return User::find($this->bids()->get()->last()->bidder_id);
    }

    public static function allPurchases(User $user)
    {
        return Car::where('buyer_id', $user->id)->get();
    }

    public static function newLast7Days()
    {
        return Car::where('created_at','<=',Carbon::now())
                ->where('created_at','>',Carbon::now()->subDays(7))
                ->count();
    }

    public static function openAuctions(){
        return Car::where('buyer_id',null)->count();
    }

    public static function closedAuctions(){
        return Car::where('buyer_id','!==',null)->count();
    }
//    public function scopeBrandFilter(Collection $cars,$brand_id){
//
//        $cars->every(function($car,$kay)use ($brand_id){
//            return $car->brand_id==$brand_id;
//        });
//    }
}
