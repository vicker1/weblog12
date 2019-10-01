<?php

use Faker\generator as Faker;
use App\Model\category;
use App\Model\Question;
use App\User;

$factory->define(App\model\Reply::class, function (Faker $faker) {

    return [

        'body' => $faker->text,
        'question_id' => function () {
            return Question::all()->random();
        },
        'user_id' => function (){
            return User::all()->random();
        },
    ];


});