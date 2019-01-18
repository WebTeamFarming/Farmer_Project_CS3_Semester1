<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->charset='utf8';
            $table->collation='utf8_Unicode_ci';
            $table->increments('farmer_id');
            $table->string('name');
            $table->string('phone');
            $table->enum('gender',['Male','Female']);
            $table->longText('additional_description');
            $table->date('date_created');
            $table->integer('v_id');
            $table->integer('photo_id');
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
        Schema::dropIfExists('farmer');
    }
}
