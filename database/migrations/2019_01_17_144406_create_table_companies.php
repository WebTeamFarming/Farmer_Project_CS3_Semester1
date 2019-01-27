<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCompanies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Companies', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_Unicode_ci';
            $table->increments('com_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->longtext('additional_description');
            $table->date('date_created');
            $table->integer('v_id')->unsigned();
            $table->integer('photo_id')->unsigned();
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
        Schema::dropIfExists('Companies');
    }
}
