<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Business;
use Faker\Generator as Faker;

$factory->define(Business::class, function (Faker $faker) {
    return [
         'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'status' =>mt_rand(0,1),
        'description'=>$faker->paragraph,
        'category_id' => json_encode([mt_rand(1,3), mt_rand(1,2)]),
        'address'=>$faker->address,
        'website'=>$faker->url,
        'phone'=> $faker->phone,
        'feature_image'=> json_encode(['image.jpg']),
        
    ];
});
