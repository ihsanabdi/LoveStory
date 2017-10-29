<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableKonsumen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('konsumen', function (Blueprint $table) {
            $table->foreign('kons_user_id')
                ->references('user_id')
                ->on('user')
                ->onUpdate('cascade')
                ->OnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('konsumen', function (Blueprint $table) {
            $table->dropForeign('konsumen_kons_user_id_foreign');
            //pegawai_agama_id_foriegn
        });
    }
}
