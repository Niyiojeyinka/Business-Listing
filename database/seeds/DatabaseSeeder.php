<?php

use Illuminate\Database\Seeder;
//use BusinessesTableSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(BusinessesTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
