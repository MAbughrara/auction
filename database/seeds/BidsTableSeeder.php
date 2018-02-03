<?php

use Illuminate\Database\Seeder;

class BidsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bids')->insert([
            ['car_id' => 1,
                'bidder_id' => 2,
                'bid_val' => 1000,
                'created_at' => \Carbon\Carbon::tomorrow()->addMinutes(1)],
            ['car_id' => 1,
                'bidder_id' => 3,
                'bid_val' => 2000,
                'created_at' => \Carbon\Carbon::tomorrow()->addMinutes(2)],
            ['car_id' => 1,
                'bidder_id' => 4,
                'bid_val' => 3000,
                'created_at' => \Carbon\Carbon::tomorrow()->addMinutes(3)],
            ['car_id' => 1,
                'bidder_id' => 5,
                'bid_val' => 4000,
                'created_at' => \Carbon\Carbon::tomorrow()->addMinutes(4)]
        ]);
        DB::table('bids')->insert([
            ['car_id' => 2,
                'bidder_id' => 2,
                'bid_val' => 1000,
                'created_at' => \Carbon\Carbon::tomorrow()->addMinutes(1)],
            ['car_id' => 2,
                'bidder_id' => 3,
                'bid_val' => 2000,
                'created_at' => \Carbon\Carbon::tomorrow()->addMinutes(2)],
            ['car_id' => 2,
                'bidder_id' => 4,
                'bid_val' => 3000,
                'created_at' => \Carbon\Carbon::tomorrow()->addMinutes(3)],
            ['car_id' => 2,
                'bidder_id' => 6,
                'bid_val' => 4000,
                'created_at' => \Carbon\Carbon::tomorrow()->addMinutes(4)]
        ]);
        DB::table('bids')->insert([
            ['car_id' => 13,
                'bidder_id' => 2,
                'bid_val' => 1000,
                'created_at' => \Carbon\Carbon::yesterday()->addMinutes(1)],
            ['car_id' => 12,
                'bidder_id' => 3,
                'bid_val' => 2000,
                'created_at' => \Carbon\Carbon::yesterday()->addMinutes(2)],
            ['car_id' => 12,
                'bidder_id' => 4,
                'bid_val' => 3000,
                'created_at' => \Carbon\Carbon::yesterday()->addMinutes(3)],
            ['car_id' => 12,
                'bidder_id' => 6,
                'bid_val' => 4000,
                'created_at' => \Carbon\Carbon::yesterday()->addMinutes(4)]
        ]);
        DB::table('bids')->insert([
            ['car_id' => 14,
                'bidder_id' => 2,
                'bid_val' => 1000,
                'created_at' => \Carbon\Carbon::yesterday()->addMinutes(1)],
            ['car_id' => 11,
                'bidder_id' => 3,
                'bid_val' => 2000,
                'created_at' => \Carbon\Carbon::yesterday()->addMinutes(2)],
            ['car_id' => 12,
                'bidder_id' => 4,
                'bid_val' => 3000,
                'created_at' => \Carbon\Carbon::yesterday()->addMinutes(3)],
            ['car_id' => 13,
                'bidder_id' => 6,
                'bid_val' => 4000,
                'created_at' => \Carbon\Carbon::yesterday()->addMinutes(4)]
        ]);
        DB::table('bids')->insert([
            ['car_id' => 1,
                'bidder_id' => 2,
                'bid_val' => 1000,
                'created_at' => \Carbon\Carbon::tomorrow()->addMinutes(1)],
            ['car_id' => 2,
                'bidder_id' => 3,
                'bid_val' => 2000,
                'created_at' => \Carbon\Carbon::tomorrow()->addMinutes(2)],
            ['car_id' => 3,
                'bidder_id' => 4,
                'bid_val' => 3000,
                'created_at' => \Carbon\Carbon::tomorrow()->addMinutes(3)],
            ['car_id' => 3,
                'bidder_id' => 6,
                'bid_val' => 4000,
                'created_at' => \Carbon\Carbon::tomorrow()->addMinutes(4)]
        ]);

    }
}
