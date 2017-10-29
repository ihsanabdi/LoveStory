<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_paket', function (Blueprint $table) {
            $table->increments('depa_id');
            $table->text('depa_jenis');
            $table->unsignedInteger('depa_harga');
            $table->unsignedInteger('depa_pkt_id');
            $table->string('depa_create_by', 150);
            $table->string('depa_change_by', 150);
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
        Schema::dropIfExists('detail_paket');
    }
}
