<?php

use Faker\Generator as Faker;
use App\Models\Kategori;

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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Vendor::class, function (Faker $faker) {
    $kategori = Kategori::inRandomOrder()->first()['ktgr_id'];
	$name = $faker->name;

    return [
        'vend_nama' => $name,
        'vend_deskripsi' => $faker->text,
        'vend_foto' => 'images/vendor/'.str_slug($name, '-').'.jpg',
        'vend_create_by' => 'admin',
        'vend_change_by' => 'admin',
        'vend_ktgr_id' => $kategori,
    ];
});
