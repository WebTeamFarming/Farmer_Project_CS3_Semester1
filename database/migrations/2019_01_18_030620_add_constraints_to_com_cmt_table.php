<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConstraintsToComCmtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('com_cmt', function (Blueprint $table) {
            $table->foreign('com_id')
            ->references('com_id')
            ->on('companies')
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
        Schema::table('com_cmt', function (Blueprint $table) {
            //
        });
    }
}
