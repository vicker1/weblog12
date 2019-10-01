<?php

use Faker\generator as Faker;


$factory->define(App\model\Category::class, function (Faker $faker) {
    $word = $faker->word;
    return [

        'name' => $word,
        'slug' =>str_slug($word) 

    ];


});