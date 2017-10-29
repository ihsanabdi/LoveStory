<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableBudgeting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('budgeting', function (Blueprint $table) {

            $table->foreign('bdgt_pkt_id')
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
        Schema::table('budgeting', function (Blueprint $table) {
            $table->dropForeign('budgeting_bdgt_pkt_id_foreign');
        });
    }
}
