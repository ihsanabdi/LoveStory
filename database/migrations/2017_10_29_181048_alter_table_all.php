<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableAll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('budgeting', function (Blueprint $table) {
            $table->unsignedInteger('bdgt_create_by')->nullable()->change();
            $table->unsignedInteger('bdgt_change_by')->nullable()->change();
        });
        Schema::table('detail_paket', function (Blueprint $table) {
            $table->unsignedInteger('depa_create_by')->nullable()->change();
            $table->unsignedInteger('depa_change_by')->nullable()->change();
        });
        Schema::table('detail_vendor', function (Blueprint $table) {
            $table->unsignedInteger('dave_create_by')->nullable()->change();
            $table->unsignedInteger('dave_change_by')->nullable()->change();
        });
        Schema::table('galeri', function (Blueprint $table) {
            $table->unsignedInteger('glr_create_by')->nullable()->change();
            $table->unsignedInteger('glr_change_by')->nullable()->change();
        });
        Schema::table('kategori', function (Blueprint $table) {
            $table->unsignedInteger('ktgr_create_by')->nullable()->change();
            $table->unsignedInteger('ktgr_change_by')->nullable()->change();
        });
        Schema::table('konsumen', function (Blueprint $table) {
            $table->unsignedInteger('kons_create_by')->nullable()->change();
            $table->unsignedInteger('kons_change_by')->nullable()->change();
        });
        Schema::table('paket', function (Blueprint $table) {
            $table->unsignedInteger('pkt_create_by')->nullable()->change();
            $table->unsignedInteger('pkt_change_by')->nullable()->change();
        });
        Schema::table('pesan', function (Blueprint $table) {
            $table->unsignedInteger('psn_create_by')->nullable()->change();
            $table->unsignedInteger('psn_change_by')->nullable()->change();
        });
        Schema::table('role', function (Blueprint $table) {
            $table->unsignedInteger('role_create_by')->nullable()->change();
            $table->unsignedInteger('role_change_by')->nullable()->change();
        });
        Schema::table('jenis_vendor', function (Blueprint $table) {
            $table->unsignedInteger('jenvend_create_by')->nullable()->change();
            $table->unsignedInteger('jenvend_change_by')->nullable()->change();
        });
        Schema::table('service', function (Blueprint $table) {
            $table->unsignedInteger('serv_create_by')->nullable()->change();
            $table->unsignedInteger('serv_change_by')->nullable()->change();
        });
        Schema::table('vendor', function (Blueprint $table) {
            $table->unsignedInteger('vend_create_by')->nullable()->change();
            $table->unsignedInteger('vend_change_by')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
