<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'description' => $faker->sentence(30),
        'price' => $faker->numberBetween(100,5000),
        'image' => $faker->image('public/frontend/images',640,480, 'nature', false)

    ];
});
