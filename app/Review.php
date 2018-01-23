<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{


    public function reviewer(){
        return $this->belongsTo(User::class,'creator_id');
    }

    public function reviewed(){
         return $this->belongsTo(User::class,'target_id');
    }
}
