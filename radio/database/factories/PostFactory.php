<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    
		$title = $faker->sentence(4);
    return [
    	'user_id' => rand(1,20),
    	'category_id' => rand(1,10),
        'descripcion' => $title,
        'slug' => str_slug($title),
        'titulo' => $title,
        'urlmultimedia' => null, // default NULL
        'cabeceraimagen' => $faker->imageUrl($width = 1200, $height = 400),
        'texto' => $faker->text(500),
        'totalV' => 0,
    ];
});
