<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Districts', function (Blueprint $table) {
            $table->collation = 'utf8_unicode_ci';
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->increments('d_id');
            $table->string('district');
            $table->integer('p_id');
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
        Schema::dropIfExists('Districts');
    }
}
