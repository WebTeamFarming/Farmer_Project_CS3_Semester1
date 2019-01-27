<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConstraintsToFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('farmers', function (Blueprint $table) {
            $table->foreign('v_id')
            ->references('v_id')
            ->on('villages')
            ->onDelete('restrict')
            ->onUpdate('cascade');

            $table->foreign('photo_id')
            ->references('photo_id')
            ->on('photos')
            ->onDelete('restrict')
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
        Schema::table('farmers', function (Blueprint $table) {
            //
        });
    }
}
