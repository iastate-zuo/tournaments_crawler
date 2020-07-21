<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
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

$factory->define(Contact::class, function (Faker $faker) {
	$fn = Str::random(6);
	$ln = Str::random(8);
	$email = Str::substr($fn, 0, 3) . "_" . Str::substr($ln, 0, 4) . "@iastate.edu";

	return [
		'first_name' => $fn,
		'last_name' => $ln,
		'email' => $email,
		'addr' => Str::random(15),
		'city' => Str::random(6),
		'state' => 'IA',
		'zipcode' => '50000',
	];
});
