<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableVendor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vendor', function (Blueprint $table) {
            $table->unsignedInteger('vend_ktgr_id');//->nullable();

            $table->foreign('vend_ktgr_id')
                ->references('ktgr_id')
                ->on('kategori')
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
        Schema::table('vendor', function (Blueprint $table) {
            $table->dropForeign('vendor_vend_ktgr_id_foreign');
        });
    }
}
