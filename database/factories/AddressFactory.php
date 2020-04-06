<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'address'    => $faker->streetAddress,
        'number'     => $faker->buildingNumber,
        'district'   => $faker->citySuffix,
        'cep'        => '15000-000',
        'complement' => $faker->name,
        'state'      => 'SP',
        'city'       => $faker->city,
    ];
});
