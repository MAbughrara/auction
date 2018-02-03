<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('cars')->insert([
            'id'=>1,
            'seller_id'=>1,
            'brand_id'=>1,
            'status'=>'good',
            'notes'=>'car for live',
            'km'=>'100000',
            'first_bid'=>'13000',
            'end_date'=>Carbon\Carbon::tomorrow(),
            'year'=>Carbon\Carbon::tomorrow()->subYear(10),
            'updated_at'=>Carbon\Carbon::now(),
            'created_at'=>Carbon\Carbon::now(),
        ]);

        DB::table('cars')->insert([
            'id'=>2,
            'seller_id'=>1,
            'brand_id'=>2,
            'status'=>'very good',
            'notes'=>'car for live',
            'km'=>'150000',
            'first_bid'=>'7000',
            'end_date'=>Carbon\Carbon::tomorrow(),
            'year'=>Carbon\Carbon::tomorrow()->subYear(5),
            'updated_at'=>Carbon\Carbon::now(),
            'created_at'=>Carbon\Carbon::now(),
        ]);
        DB::table('cars')->insert([
            'id'=>3,
            'seller_id'=>2,
            'brand_id'=>3,
            'status'=>'excellent',
            'notes'=>'i hate to sell it',
            'km'=>'50000',
            'first_bid'=>'17000',
            'end_date'=>Carbon\Carbon::tomorrow(),
            'year'=>Carbon\Carbon::tomorrow()->subYear(13),
            'updated_at'=>Carbon\Carbon::now(),
            'created_at'=>Carbon\Carbon::now(),
        ]);
        DB::table('cars')->insert([
            'id'=>4,
            'seller_id'=>3,
            'brand_id'=>4,
            'status'=>'acceptable',
            'notes'=>'i sell it',
            'km'=>'40000',
            'first_bid'=>'14300',
            'end_date'=>Carbon\Carbon::tomorrow(),
            'year'=>Carbon\Carbon::tomorrow()->subYear(10),
            'updated_at'=>Carbon\Carbon::now(),
            'created_at'=>Carbon\Carbon::now(),
        ]);
        DB::table('cars')->insert([
            'id'=>5,
            'seller_id'=>6,
            'brand_id'=>6,
            'status'=>'excellent',
            'notes'=>'i hate to sell it',
            'km'=>'50000',
            'first_bid'=>'17000',
            'end_date'=>Carbon\Carbon::tomorrow(),
            'year'=>Carbon\Carbon::tomorrow()->subYear(13),
            'updated_at'=>Carbon\Carbon::now(),
            'created_at'=>Carbon\Carbon::now(),
        ]);
        DB::table('cars')->insert([
            'id'=>6,
            'seller_id'=>4,
            'brand_id'=>7,
            'status'=>'excellent',
            'notes'=>'i hate to sell it',
            'km'=>'50000',
            'first_bid'=>'17000',
            'end_date'=>Carbon\Carbon::tomorrow(),
            'year'=>Carbon\Carbon::tomorrow()->subYear(5),
            'updated_at'=>Carbon\Carbon::now(),
            'created_at'=>Carbon\Carbon::now(),
        ]);
        DB::table('cars')->insert([
            'id'=>7,
            'seller_id'=>9,
            'brand_id'=>3,
            'status'=>'excellent',
            'notes'=>'i hate to sell it',
            'km'=>'50000',
            'first_bid'=>'17000',
            'end_date'=>Carbon\Carbon::tomorrow(),
            'year'=>Carbon\Carbon::tomorrow()->subYear(3),
            'updated_at'=>Carbon\Carbon::now(),
            'created_at'=>Carbon\Carbon::now(),
        ]);
        DB::table('cars')->insert([
            'id'=>8,
            'seller_id'=>8,
            'brand_id'=>8,
            'status'=>'excellent',
            'notes'=>'i hate to sell it',
            'km'=>'50000',
            'first_bid'=>'17000',
            'end_date'=>Carbon\Carbon::tomorrow(),
            'year'=>Carbon\Carbon::tomorrow()->subYear(6),
            'updated_at'=>Carbon\Carbon::now(),
            'created_at'=>Carbon\Carbon::now(),
        ]);
        DB::table('cars')->insert([
            'id'=>9,
            'seller_id'=>6,
            'brand_id'=>10,
            'status'=>'excellent',
            'notes'=>'i hate to sell it',
            'km'=>'50000',
            'first_bid'=>'17000',
            'end_date'=>Carbon\Carbon::tomorrow(),
            'year'=>Carbon\Carbon::tomorrow()->subYear(11),
            'updated_at'=>Carbon\Carbon::now(),
            'created_at'=>Carbon\Carbon::now(),
        ]);
        DB::table('cars')->insert([
            'id'=>10,
            'seller_id'=>10,
            'brand_id'=>4,
            'status'=>'excellent',
            'notes'=>'i hate to sell it',
            'km'=>'50000',
            'first_bid'=>'17000',
            'end_date'=>Carbon\Carbon::tomorrow(),
            'year'=>Carbon\Carbon::tomorrow()->subYear(10),
            'updated_at'=>Carbon\Carbon::now(),
            'created_at'=>Carbon\Carbon::now(),
        ]);

        DB::table('cars')->insert([
            'id'=>11,
            'seller_id'=>2,
            'brand_id'=>1,
            'status'=>'excellent',
            'notes'=>'car for live',
            'km'=>'200000',
            'buyer_id'=>3,
            'first_bid'=>'12000',
            'end_date'=>Carbon\Carbon::yesterday(),
            'year'=>Carbon\Carbon::tomorrow()->subYear(3),
            'updated_at'=>Carbon\Carbon::now(),
            'created_at'=>Carbon\Carbon::now(),
        ]);

        DB::table('cars')->insert([
            'id'=>12,
            'seller_id'=>10,
            'brand_id'=>2,
            'buyer_id'=>1,
            'status'=>'good',
            'notes'=>'car for live',
            'km'=>'120000',
            'first_bid'=>'8000',
            'end_date'=>Carbon\Carbon::yesterday(),
            'year'=>Carbon\Carbon::tomorrow()->subYear(8),
            'updated_at'=>Carbon\Carbon::yesterday(),
            'created_at'=>Carbon\Carbon::yesterday(),
        ]);
        DB::table('cars')->insert([
            'id'=>13,
            'seller_id'=>2,
            'brand_id'=>3,
            'buyer_id'=>1,
            'status'=>'excellent',
            'notes'=>'i hate to sell it',
            'km'=>'50100',
            'first_bid'=>'11000',
            'end_date'=>Carbon\Carbon::yesterday(),
            'year'=>Carbon\Carbon::tomorrow()->subYear(3),
            'updated_at'=>Carbon\Carbon::yesterday(),
            'created_at'=>Carbon\Carbon::yesterday(),
        ]);
        DB::table('cars')->insert([
            'id'=>14,
            'seller_id'=>6,
            'brand_id'=>4,
            'buyer_id'=>5,
            'status'=>'acceptable',
            'notes'=>'i sell it',
            'km'=>'40000',
            'first_bid'=>'14300',
            'end_date'=>Carbon\Carbon::yesterday(),
            'year'=>Carbon\Carbon::tomorrow()->subYear(6),
            'updated_at'=>Carbon\Carbon::yesterday(),
            'created_at'=>Carbon\Carbon::yesterday(),
        ]);
        DB::table('cars')->insert([
            'id'=>15,
            'seller_id'=>2,
            'brand_id'=>6,
            'buyer_id'=>3,
            'status'=>'excellent',
            'notes'=>'i hate to sell it',
            'km'=>'50000',
            'first_bid'=>'17000',
            'end_date'=>Carbon\Carbon::yesterday(),
            'year'=>Carbon\Carbon::tomorrow()->subYear(7),
            'updated_at'=>Carbon\Carbon::yesterday(),
            'created_at'=>Carbon\Carbon::yesterday(),
        ]);
        DB::table('cars')->insert([
            'id'=>16,
            'seller_id'=>4,
            'brand_id'=>7,
            'buyer_id'=>10,
            'status'=>'excellent',
            'notes'=>'i hate to sell it',
            'km'=>'50000',
            'first_bid'=>'17000',
            'end_date'=>Carbon\Carbon::yesterday(),
            'year'=>Carbon\Carbon::tomorrow()->subYear(5),
            'updated_at'=>Carbon\Carbon::yesterday(),
            'created_at'=>Carbon\Carbon::yesterday(),
        ]);
        DB::table('cars')->insert([
            'id'=>17,
            'seller_id'=>9,
            'brand_id'=>3,
            'buyer_id'=>3,
            'status'=>'excellent',
            'notes'=>'i hate to sell it',
            'km'=>'50000',
            'first_bid'=>'17000',
            'end_date'=>Carbon\Carbon::yesterday(),
            'year'=>Carbon\Carbon::tomorrow()->subYear(3),
            'updated_at'=>Carbon\Carbon::yesterday(),
            'created_at'=>Carbon\Carbon::yesterday(),
        ]);
        DB::table('cars')->insert([
            'id'=>18,
            'seller_id'=>8,
            'brand_id'=>8,
            'buyer_id'=>8,
            'status'=>'excellent',
            'notes'=>'i hate to sell it',
            'km'=>'50000',
            'first_bid'=>'17000',
            'end_date'=>Carbon\Carbon::tomorrow(),
            'year'=>Carbon\Carbon::tomorrow()->subYear(6),
            'updated_at'=>Carbon\Carbon::now(),
            'created_at'=>Carbon\Carbon::now(),
        ]);
        DB::table('cars')->insert([
            'id'=>19,
            'seller_id'=>6,
            'brand_id'=>10,
            'status'=>'excellent',
            'notes'=>'i hate to sell it',
            'km'=>'50000',
            'first_bid'=>'17000',
            'end_date'=>Carbon\Carbon::tomorrow(),
            'year'=>Carbon\Carbon::tomorrow()->subYear(11),
            'updated_at'=>Carbon\Carbon::now(),
            'created_at'=>Carbon\Carbon::now(),
        ]);
        DB::table('cars')->insert([
            'id'=>20,
            'seller_id'=>10,
            'brand_id'=>4,
            'status'=>'excellent',
            'notes'=>'i hate to sell it',
            'km'=>'50000',
            'first_bid'=>'17000',
            'end_date'=>Carbon\Carbon::tomorrow(),
            'year'=>Carbon\Carbon::tomorrow()->subYear(10),
            'updated_at'=>Carbon\Carbon::now(),
            'created_at'=>Carbon\Carbon::now(),
        ]);

    }
}
