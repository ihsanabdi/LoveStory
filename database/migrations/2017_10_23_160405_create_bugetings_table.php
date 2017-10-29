<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBugetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgeting', function (Blueprint $table) {
            $table->increments('bdgt_id');
            $table->text('bdgt_nama');
            $table->unsignedInteger('bdgt_nominal');
            $table->unsignedInteger('bdgt_pkt_id');
            $table->string('bdgt_create_by', 150);
            $table->string('bdgt_change_by', 150);
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
        Schema::dropIfExists('budgeting');
    }
}
