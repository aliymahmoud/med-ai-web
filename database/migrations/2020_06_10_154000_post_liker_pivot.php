<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PostLikerPivot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_liker_pivot', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
        Schema::table('post_liker_pivot', function (Blueprint $table) {
            $table->foreign("post_id")->references('id')->on('posts')->onDelete('cascade');
            $table->foreign("user_id")->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post_liker_pivot', function (Blueprint $table) {
            $table->dropForeign(['post_id','user_id']);
        });
        Schema::dropIfExists('post_liker_pivot');
    }
}
