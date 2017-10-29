<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableDetalVendor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_vendor', function (Blueprint $table) {

            $table->foreign('dave_vend_id')
                ->references('vend_id')
                ->on('vendor')
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
        Schema::table('detail_vendor', function (Blueprint $table) {
            $table->dropForeign('detail_vendor_dave_vend_id_foreign');
        });
    }
}
