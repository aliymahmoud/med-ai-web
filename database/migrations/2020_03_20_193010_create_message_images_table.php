<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('original_filename');
            $table->string('extension');
            $table->string('path');
            $table->string('type');
            $table->unsignedBigInteger('message_id');
            $table->timestamps();
        });
        Schema::table('message_images', function (Blueprint $table) {
            $table->foreign("message_id")->references('id')->on('messages')->onDelete('cascade');
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('message_images', function (Blueprint $table) {
            $table->dropForeign(['message_id']);
        });
        Schema::dropIfExists('message_images');
    }
}
