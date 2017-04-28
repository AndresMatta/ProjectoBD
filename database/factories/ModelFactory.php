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
        'name' => $faker->firstName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Teacher::class, function ($faker){
	return [
		'dni' => str_random(10),
		'name' => $faker->name,
		'last_name' => $faker->lastName,
		'birthdate' => $faker->date,
		'phone' => $faker->e164PhoneNumber,
		'population' => $faker->state,
		'address' => $faker->address,
		'postal_code' => 3
	];
});

$factory->define(App\Student::class, function ($faker){
	return [
		'dni' => str_random(10),
		'name' => $faker->name,
		'last_name' => $faker->lastName,
		'birthdate' => $faker->date,
		'phone' => $faker->e164PhoneNumber,
		'population' => $faker->state,
		'address' => $faker->address,
		'postal_code' => 3
	];
});

$factory->define(App\Grade::class, function ($faker){
	return [
		'cod' => str_random(3),
		'name' => $faker->name,
		'teacher_id'=> function(){
			return factory('App\Teacher')->create()->id;
		},
	];
});

$factory->define(App\Subject::class, function ($faker){
	return [
		'cod' => str_random(3),
		'name' => $faker->name,
		'hours_per_week' => $faker->randomDigit,
		'teacher_id'=> function(){
			return factory('App\Teacher')->create()->id;
		}
	];
});

$factory->define(App\StudentRecord::class, function ($faker){
	return [
		'student_id'=> function(){
			return factory('App\Student')->create()->id;
		},
		'subject_id'=> function(){
			return factory('App\Subject')->create()->id;
		},
		'score'=> $faker->randomDigit,
		'incidences'=> $faker->paragraph,
	];
});




