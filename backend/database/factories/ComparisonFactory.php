<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Comparison;
use Faker\Generator as Faker;

$factory->define(Comparison::class, function ($faker) {
    return [
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'food_id' =>'1'     
    ];
});
