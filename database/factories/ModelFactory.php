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
    static $password;

    return [
        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    static $categoryName;

    return [
        'categoryName' => $categoryName
    ];
});

$factory->define(App\Debit::class, function (Faker\Generator $faker) {
    static $debitUserId;
    static $debitName;
    static $debitCategoryId;
    static $debitAmount;

    return [
        'debitUserId' => $debitUserId,
        'debitName' => $debitName,
        'debitCategoryId' => $debitCategoryId,
        'debitAmount' => $debitAmount
    ];
});