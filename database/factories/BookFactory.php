<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'category_id' => rand(1,10),
        'title' => $faker->name,
        'author' => $faker->name,
        'image' => 'https://lonelyplanet-weblinc.netdna-ssl.com/product_images/lonely_planet_us/the-place-to-be-1/pdp/5a2c7946f92ea161d578fc2d/pdp_main.jpg?c=1512864070',
        'description' => $faker->paragraph(2),
        'link' => 'https://www.google.rs/'
    ];
});
