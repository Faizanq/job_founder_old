<?php

use App\Models\Category;
use App\Models\Language;
use App\Models\Position;
use App\Models\Reason;
use App\Models\Report;
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

$factory->define(Report::class, function (Faker $faker) {
    return [
        'reason' => $faker->paragraph(1),
        'image' =>'http://lorempixel.com/100/100/',
    ];
});

$factory->define(Position::class, function (Faker $faker) {
    return [
        'position' => $faker->word,
    ];
});

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'image' =>'http://lorempixel.com/100/100/',
    ];
});

