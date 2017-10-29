<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KategoriSeeder::class);
        factory(App\Models\Vendor::class, 100)->create();
    }
}
