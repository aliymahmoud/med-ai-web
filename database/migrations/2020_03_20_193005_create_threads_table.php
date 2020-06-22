<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('first_id');
            $table->unsignedBigInteger('second_id');
            $table->timestamps();
        });
        Schema::table('threads', function (Blueprint $table) {
            $table->foreign("first_id")->references('id')->on('users')->onDelete('cascade');
            $table->foreign("second_id")->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('threads', function (Blueprint $table) {
            $table->dropForeign(['first_id','second_id']);
        });
        Schema::dropIfExists('threads');
    }
}
