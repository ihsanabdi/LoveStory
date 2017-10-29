<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableDetailVendorDaveJenis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_vendor', function (Blueprint $table) {
            $table->unsignedInteger('dave_jenis')->change();

            $table->foreign('dave_jenis')
                ->references('jenvend_id')
                ->on('jenis_vendor')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
            $table->dropForeign('detail_vendor_dave_jenis_foreign');
        });
    }
}
