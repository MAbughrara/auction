<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function reviews(){
        return $this->hasMany(Review::class,'creator_id');
    }

    public function reviewed(){
        return $this->hasMany(Review::class,'target_id');
    }

    public function bids(){
        return $this->hasMany(Bid::class,'bidder_id');
    }

    public function cars(){
        return $this->hasMany(Car::class,'seller_id');
    }

    public function purchases(){
        return $this->hasMany(Car::class,'buyer_id');
    }

    public function role(){
        return $this->hasOne(Role::class);
    }
}
