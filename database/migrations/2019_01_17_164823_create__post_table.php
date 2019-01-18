<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->charset='utf8';
            $table->collation='utf8_Unicode_ci';
            $table->increments('post_id');
            $table->longText('text');
            $table->date('date_posted');
            $table->integer('farmer_id');
            $table->integer('com_id');
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
        Schema::dropIfExists('posts');
    }
}
