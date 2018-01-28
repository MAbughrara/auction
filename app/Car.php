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

}
