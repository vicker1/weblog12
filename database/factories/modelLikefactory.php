<?php

use Faker\generator as Faker;
use App\User;

$factory->define(App\model\Like::class, function (Faker $faker) {

    return [

        'user_id'=> function () {
            return User::all()->random();
        }
    ];


});