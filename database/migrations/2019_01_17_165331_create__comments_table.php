<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->charset='utf8';
            $table->collation='utf8_Unicode_ci';
            $table->increments('cmt_id');
            $table->longText('text');
            $table->date('date');
            $table->integer('post_id')->unsigned();
            $table->integer('com_id')->unsigned();
            $table->integer('farmer_cmt_id')->unsigned();
            $table->integer('com_cmt_id')->unsigned();
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('comments');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}
