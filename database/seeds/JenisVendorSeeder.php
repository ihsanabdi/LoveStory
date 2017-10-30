<?php

use App\Models\JenisVendor;
use Illuminate\Database\Seeder;

class JenisVendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $j = new JenisVendor();
        $j->jenvend_nama = "Tradisional";
        $j->save();

        $j = new JenisVendor();
        $j->jenvend_nama = "Modern";
        $j->save();
    }
}
