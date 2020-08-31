<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Country;
use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {

        return [
         
            'country_name' => $faker->sentence,
            'country_religion' => $faker->sentence,
        ];
  
});
