<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_vendor', function (Blueprint $table) {
            $table->increments('dave_id');
            $table->string('dave_jenis');
            $table->text('dave_deskripsi');
            $table->unsignedInteger('dave_harga');
            $table->string('dave_foto');
            $table->unsignedInteger('dave_vend_id');
            $table->string('dave_create_by', 150);
            $table->string('dave_change_by', 150);
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
        Schema::dropIfExists('detail_vendor');
    }
}
