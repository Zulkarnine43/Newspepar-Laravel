<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_registers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('mobile');
            $table->string('email')->unique();;
            $table->string('gender');
            $table->string('password');
            $table->string('confirm_password');
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
        Schema::dropIfExists('admin_registers');
    }
}
