<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'details'=> $faker->paragraph,
        'price'=> $faker->numberBetween(100,1000),
        'stock' =>$faker->randomDigit,
        'discount'=> $faker->numberBetween(2,30)

    ];
});
