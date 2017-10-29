<?php

use App\Models\JenisVendor;
use App\Models\Kategori;
use App\Models\Vendor;
use Faker\Generator as Faker;

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
        // 'vend_create_by' => 'admin',
        // 'vend_change_by' => 'admin',
        'vend_ktgr_id' => $kategori,
    ];
});

$factory->define(App\Models\DetailVendor::class, function (Faker $faker) {
    $jenis = JenisVendor::inRandomOrder()->first()['jenvend_id'];
    $vendor = Vendor::inRandomOrder()->first()['vend_id'];
	$name = $faker->name;

    return [
        'dave_jenis' => $jenis,
        'dave_deskripsi' => $faker->text,
        'dave_harga' => $faker->numberBetween(5000000,20000000),
        'dave_foto' => 'images/vendor-detail/'.str_slug($name, '-').'.jpg',
        'dave_vend_id' => $vendor,
    ];
});
