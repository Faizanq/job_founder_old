<?php

use App\Models\Language;
use App\Models\Reason;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


$factory->define(Language::class, function (Faker $faker) {
    return [
        'language_code' => str_random(2),
        'language_name' => $faker->word,
    ];
});

$factory->define(Reason::class, function (Faker $faker) {
    return [
        'reason' => $faker->paragraph(1),
    ];
});

