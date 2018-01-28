<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('brands')->insert([
            'id'=>1,
            'name'=>'Toyota'
        ]);
        DB::table('brands')->insert([
            'id'=>2,
            'name'=>'Hyundai'
        ]);
        DB::table('brands')->insert([
            'id'=>3,
            'name'=>'BMW'
        ]);
        DB::table('brands')->insert([
            'id'=>4,
            'name'=>'Mercedes'
        ]);
        DB::table('brands')->insert([
            'id'=>5,
            'name'=>'Kia'
        ]);
        DB::table('brands')->insert([
            'id'=>6,
            'name'=>'Jeep'
        ]);
        DB::table('brands')->insert([
            'id'=>7,
            'name'=>'Chevrolet'
        ]);
        DB::table('brands')->insert([
            'id'=>8,
            'name'=>'Audi'
        ]);
        DB::table('brands')->insert([
            'id'=>9,
            'name'=>'Infiniti'
        ]);
        DB::table('brands')->insert([
            'id'=>10,
            'name'=>'Mazda'
        ]);
    }
}
