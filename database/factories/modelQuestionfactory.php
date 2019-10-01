<?php

use Faker\generator as Faker;
use App\model\category;
use App\User;


$factory->define(App\model\Question::class, function (Faker $faker) {
    $title= $faker->sentence;
    return [
        'title'=> $title,
        'slug'=> str_slug($title),
        'body'=> $faker->text,
        'category_id' =>function () {
                return category::all()->random();
        },

        'user_id'=> function () {
            return User::all()->random();
        }

        
    ];


});