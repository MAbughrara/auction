<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Review extends Model
{

    public function reviewer(){
        return $this->belongsTo(User::class,'creator_id');
    }

    public function reviewed(){
         return $this->belongsTo(User::class,'target_id');
    }

    public static function avg($id){
        return $rate = DB::table('reviews')->where('target_id',"$id")->avg('rate');
    }

    public static function starsCount($id, $star){
        return $stars = Review::where('target_id',"$id")->where('rate',"$star")->count();
    }

    public static function starPercent($id, $star){
        $review_count = Review::where('target_id',"$id")->count();
        $star_count = Review::starsCount($id, $star);
        return $percent = (($star_count/$review_count)* 100);
    }
}
