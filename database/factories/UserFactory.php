<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'email' => $faker->word,
        'description' => $faker->word,
        'referred_by' => $faker->randomDigitNotNull,
        'no_of_refs' => $faker->randomDigitNotNull,
        'ref_level_id' => $faker->randomDigitNotNull,
        'role_id' => $faker->randomDigitNotNull,
        'email_verified_at' => $faker->date('Y-m-d H:i:s'),
        'password' => $faker->word,
        'remember_token' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
