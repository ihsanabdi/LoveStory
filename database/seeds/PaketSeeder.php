<?php

use App\Models\Paket;
// use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();
        $p = new Paket();
        $p->pkt_nama = "Eksekutif";
        $p->pkt_deskripsi = $faker->text;
        $p->pkt_foto = "images/eksekutif.jpg";
        $p->save();

        $p = new Paket();
        $p->pkt_nama = "Gold";
        $p->pkt_deskripsi = $faker->text;
        $p->pkt_foto = "images/gold.jpg";
        $p->save();

        $p = new Paket();
        $p->pkt_nama = "Silver";
        $p->pkt_deskripsi = $faker->text;
        $p->pkt_foto = "images/silver.jpg";
        $p->save();

        $p = new Paket();
        $p->pkt_nama = "Medium";
        $p->pkt_deskripsi = $faker->text;
        $p->pkt_foto = "images/medium.jpg";
        $p->save();

        $p = new Paket();
        $p->pkt_nama = "Bronze";
        $p->pkt_deskripsi = $faker->text;
        $p->pkt_foto = "images/bronze.jpg";
        $p->save();
    }
}
