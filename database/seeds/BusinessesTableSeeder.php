<?php

use Illuminate\Database\Seeder;
use App\Business;

class BusinessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Business::class,20)->create();
    }
}
