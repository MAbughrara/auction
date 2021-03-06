<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call([

             UsersTableSeeder::class,
             ReviewsTableSeeder::class,
             RolesTableSeeder::class,
             BrandTableSeeder::class,
             CarTableSeeder::class,
             BidsTableSeeder::class,
             RoleUserTableSeeder::class

         ]);
    }
}
