<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelJenis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_vendor', function (Blueprint $table) {
            $table->increments('jenvend_id');
            $table->string('jenvend_nama', 100);
            $table->unsignedInteger('jenvend_create_by');
            $table->unsignedInteger('jenvend_change_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenis_vendor');
    }
}
