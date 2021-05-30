<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsAddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs_adds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('blog_name');
            $table->string('blog_type');
            $table->string('blog_description');
            $table->string('long_description');
            $table->string('blog_image');
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
        Schema::dropIfExists('blogs_adds');
    }
}
