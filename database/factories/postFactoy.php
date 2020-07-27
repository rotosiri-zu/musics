<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\post;
use Faker\Generator as Faker;

$factory->define(post::class, function (Faker $faker) {
    return [
        'title' => 'New Romantic Sailors',
        'image' => 'imageUrl',
        'genre' => 'CD',
        'text' => 'ラブライブ!',
    ];
});
