<?php

use Faker\Generator as Faker;
$factory->define(App\Model\OutputCategory::class, function (Faker $faker) {
    return [
        'name' =>$faker->word,
        'description' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});
