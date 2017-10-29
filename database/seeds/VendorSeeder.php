<?php

use Illuminate\Database\Seeder;
use App\Models\Vendor;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $v = new Vendor();
        $v->vend_nama = '';
        $v->vend_diskripsi = '';
        $v->vend_foto = '';
        $v->save();
    }
}
