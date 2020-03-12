<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Libreria::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->title(),
        'descripcion'=>$faker->paragraph,
        'user_id'=>function(){
            return factory(App\User::class)->create()->id;
        }
        ];
});
