<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConstraintsToFarmerPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('farmer_post', function (Blueprint $table) {
            $table->foreign('farmer_id')
            ->references('farmer_id')
            ->on('farmers')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('post_id')
            ->references('post_id')
            ->on('posts')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('farmer_post', function (Blueprint $table) {
            //
        });
    }
}
