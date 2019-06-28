<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->regexify('[a-z\d_]{3,15}'),
        'twitter_id' => $faker->randomNumber(8),
        'player_id' => 'FAKE' . $faker->regexify('[a-z\d]{12}'),
        'api_token' => \App\Helpers\Helper::generateApiToken(),
    ];
});
