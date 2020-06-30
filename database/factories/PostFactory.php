<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [

        'title' =>$faker->randomElement([
            'the first post',
            'the scound post',
            'the third post',
        ]),
        'body' => $faker->randomElement([
            'Network Archtict in new subject',
            'Systems Analyst in new subject',
            'Information Systems Managerin new subject'
        ]),
        'user_id' => $faker->time(1,4),

    ];
});
