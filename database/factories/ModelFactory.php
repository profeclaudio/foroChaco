<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
       'name' => 'admin',
       'email' => 'vicomser.claudio@gmail.com',
        //'name' => $faker->name,
        //'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'type'=>'admin',
        'country'=>'arg',
        'status'=>'activo'
    ];
});

$factory->define(App\Category::class,function(Faker\Generator $faker){
  return [
    'description' => $faker->username(),
  ];
});


$factory->define(App\New::class,function(Faker\Generator $faker){
  return [
     'categoryId'=> $faker->numberBetween($min=10,$max=5),
     'userId'=> '1',
     'title'=> str_radom(20),
     'content'=> str_radom(50),
     'statusN'=> str_radom(50),
  ];
});
