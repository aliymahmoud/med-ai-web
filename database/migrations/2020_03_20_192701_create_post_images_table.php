<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('original_filename');
            $table->string('extension');
            $table->string('path');
            $table->string('type');
            $table->unsignedBigInteger('post_id');
            $table->timestamps();
        });
        Schema::table('post_images', function (Blueprint $table) {
            $table->foreign("post_id")->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post_images', function (Blueprint $table) {
            $table->dropForeign(['post_id']);
        });
        Schema::dropIfExists('post_images');
    }
}
