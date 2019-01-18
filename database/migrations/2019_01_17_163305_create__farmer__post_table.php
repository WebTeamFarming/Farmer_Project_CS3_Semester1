<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmerPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer_post', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->charset='utf8';
            $table->collation='utf8_Unicode_ci';
            $table->increments('farmer_post_id');
            $table->integer('farmer_id');
            $table->integer('post_id');
            $table->date('like_date');
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
        Schema::dropIfExists('farmer_post');
    }
}
