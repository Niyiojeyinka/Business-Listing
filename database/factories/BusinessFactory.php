<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Business;
use Faker\Generator as Faker;

$factory->define(Business::class, function (Faker $faker) {
    return [
         'name' => $faker->company,
        'email' => $faker->unique()->safeEmail,
        'status' =>mt_rand(0,1),
        'description'=>$faker->paragraph,
        'address'=>$faker->address,
        'website'=>$faker->url,
        'phone'=> $faker->phoneNumber,
        'feature_image'=> json_encode(['image.jpg']),
        
    ];
});
