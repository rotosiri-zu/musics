<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => 'New Romantic Sailors',
        'image' => 'https://images-na.ssl-images-amazon.com/images/I/61zTzR8TbGL._AC_.jpg',
        'genre' => 'CD',
        'price' => 4600
    ];
});
