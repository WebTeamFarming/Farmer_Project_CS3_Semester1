<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConstraintsToFarmerCmtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('farmer_cmt', function (Blueprint $table) {
            $table->foreign('farmer_id')
            ->references('farmer_id')
            ->on('farmers')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('cmt_id')
            ->references('cmt_id')
            ->on('comments')
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
        Schema::table('farmer_cmt', function (Blueprint $table) {
            //
        });
    }
}
