<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => "admin@example.com",
        'password' => bcrypt("secret")
    ];
});

$factory->define(App\Hours::class, function ($faker) {
    return [
        'season' => $faker->monthName,
        'description' => $faker->paragraph(3),
        'active' => rand(0, 1)
    ];
});

$factory->define(App\Stylist::class, function ($faker) {
    return [
        'first_name' => $faker->name,
        'bio' => $faker->paragraph(),
        'photo' => $faker->imageUrl(300,300)
    ];
});

$factory->define(App\Product::class, function ($faker) {
    return [
        'name' => $faker->company,
        'description' => $faker->paragraph(3),
        'brand' => $faker->randomElement(['one', 'two']),
        'order' => 0
    ];
});