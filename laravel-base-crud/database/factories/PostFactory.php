<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
 // mi tiro dentro il model equivalente alla tabella
use App\Post;
// il nome del model deve essere lo stesso qui dentro.
$factory->define(Post::class, function (Faker $faker) {
    return [

      'title'     => $faker -> words($nb = 3, $variableNbWords = true),
      'text'      => $faker -> text($maxNbChars = 50),
      'category'  => $faker -> word(),
      'like'      => $faker -> randomFloat($nbMaxDecimals = 0, $min = 0, $max = 100),
      'dislike'   => $faker -> randomFloat($nbMaxDecimals = 0, $min = 0, $max = 100)

    ];
});
