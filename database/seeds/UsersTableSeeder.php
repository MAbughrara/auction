<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@auction.ly',
            'phone' => 1900000000,
            'password' => bcrypt('123456'),
            'created_at' => \Carbon\Carbon::today()
        ]);
        Factory(\App\User::class, 10)->create();
    }
}
