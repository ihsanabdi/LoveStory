<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonsumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsumen', function (Blueprint $table) {
            $table->increments('kons_id');
            $table->string('kons_nama', 150);
            $table->string('kons_no_hp', 20);
            $table->string('kons_email', 100)->unique();
            $table->text('kons_alamat');
            $table->string('kons_foto');
            $table->unsignedInteger('kons_user_id');
            $table->string('kons_create_by', 150);
            $table->string('kons_change_by', 150);
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
        Schema::dropIfExists('konsumen');
    }
}
