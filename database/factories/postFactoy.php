<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => 'New Romantic Sailors',
        'image' => 'imageUrl',
        'genre' => 'CD',
        'text' => 'ラブライブ!',
    ];
});
