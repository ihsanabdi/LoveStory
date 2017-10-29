<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableDetalPaket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_paket', function (Blueprint $table) {
            $table->foreign('depa_pkt_id')
                ->references('pkt_id')
                ->on('paket')
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
        Schema::table('detail_paket', function (Blueprint $table) {
            $table->dropForeign('detail_paket_depa_pkt_id_foreign');
        });
    }
}
