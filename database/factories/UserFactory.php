<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'surname' => $faker->lastName .' '. $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->state(User::class, 'professor-1DAW', function ($faker) {
    return [
      'name' => $faker->title('female') .' '. $faker->firstName('female'),
      'rol' => 'professor',
      'course_id' => '1',
    ];
  });

  $factory->state(User::class, 'student-1DAW', function ($faker) {
    return [
      'rol' => 'student',
      'course_id' => '1',
    ];
  });

  $factory->state(User::class, 'professor-2DAW', function ($faker) {
    return [
      'name' => $faker->title('female') .' '. $faker->firstName('female'),
      'rol' => 'professor',
      'course_id' => '2',
    ];
  });

  $factory->state(User::class, 'student-2DAW', function ($faker) {
    return [
      'rol' => 'student',
      'course_id' => '2',
    ];
  });

  $factory->state(User::class, 'professor-1DAM', function ($faker) {
    return [
      'name' => $faker->title('female') .' '. $faker->firstName('female'),
      'rol' => 'professor',
      'course_id' => '3',
    ];
  });

  $factory->state(User::class, 'student-1DAM', function ($faker) {
    return [
      'rol' => 'student',
      'course_id' => '3',
    ];
  });

  $factory->state(User::class, 'professor-2DAM', function ($faker) {
    return [
      'name' => $faker->title('female') .' '. $faker->firstName('female'),
      'rol' => 'professor',
      'course_id' => '4',
    ];
  });

  $factory->state(User::class, 'student-2DAM', function ($faker) {
    return [
      'rol' => 'student',
      'course_id' => '4',
    ];
  });

  $factory->state(User::class, 'professor-1ASIR', function ($faker) {
    return [
      'name' => $faker->title('female') .' '. $faker->firstName('female'),
      'rol' => 'professor',
      'course_id' => '5',
    ];
  });

  $factory->state(User::class, 'student-1ASIR', function ($faker) {
    return [
      'rol' => 'student',
      'course_id' => '5',
    ];
  });

  $factory->state(User::class, 'professor-2ASIR', function ($faker) {
    return [
      'name' => $faker->title('female') .' '. $faker->firstName('female'),
      'rol' => 'professor',
      'course_id' => '6',
    ];
  });

  $factory->state(User::class, 'student-2ASIR', function ($faker) {
    return [
      'rol' => 'student',
      'course_id' => '6',
    ];
  });