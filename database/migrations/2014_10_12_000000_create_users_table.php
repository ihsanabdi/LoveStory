<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_email', 150)->unique();
            $table->string('user_password');
            $table->string('user_nama', 150);
            $table->string('user_no_hp', 20);
            $table->string('user_foto');
            $table->unsignedInteger('user_role_id'); //role
            $table->string('user_create_by', 150);
            $table->string('user_change_by', 150);
            $table->rememberToken();
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
        Schema::dropIfExists('user');
    }
}
