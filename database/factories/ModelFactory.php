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

$factory->define(App\Models\CardTransaction::class, function (Faker\Generator $faker) {
    return [
        
        'type' 			=> $faker->randomElement(['deposito','retiro']),
        'amount' 		=> $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'card_id' => factory(App\Models\Card::class)->create()->id,
    ];
});

$factory->define(App\Models\Card::class,  function (Faker\Generator $faker) {
    return [
        'id' => $faker->unique()->numberBetween($min = 1000, $max = 9000),
        'client_id' => factory(App\Models\Client::class)->create()->id,
        'type' => $faker->randomElement(['credito','prepago']),
        'line_of_credit' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'balance' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'nip' => $faker->sha256(),   
    ];
});

$factory->define(App\Models\Client::class,  function (Faker\Generator $faker) {
    return [
    	'fiscal_name' => $faker->name,
        'RFC' => str_random(20),
        'email' => $faker->email,
        'phone_1' => $faker->phoneNumber(),
        'phone_2' => $faker->phoneNumber(),
         'credit_limit' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
    ];
});

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'id'                => $faker->unique()->numberBetween($min = 1000, $max = 9000),
        'user_type_id'      => '1',
        'turn_id'           => $faker->numberBetween($min = 1, $max = 3),
        'name'              => $faker->name,
        'first_lastname'    => $faker->firstName,
        'second_lastname'   => $faker->lastName,
        'login'             => $faker->userName,
        'password'          => str_random(10),
        'email'             => $faker->email,
        'api_token'         => str_random(10),
    ];
});