<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVillagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Villages', function (Blueprint $table) {
            $table->collation = 'utf8_unicode_ci';
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->increments('v_id');
            $table->string('village');
            $table->integer('c_id');
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
        Schema::dropIfExists('Villages');
    }
}
