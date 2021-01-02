<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->sentence(rand(5, 10)), "."),
        'slug' => $faker->slug,
        'body' => $faker->paragraphs(rand(3, 7), true),
        'views' => rand(1, 100),
        'answers' => rand(1, 4),
        'votes' => rand(1, 10),
        'best_answer_id' => rand(1, 100),
        'user_id' => rand(1, 100),
    ];
});
