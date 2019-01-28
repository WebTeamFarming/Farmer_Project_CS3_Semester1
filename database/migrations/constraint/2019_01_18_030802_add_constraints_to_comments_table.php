<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConstraintsToCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('post_id')
            ->references('post_id')
            ->on('posts')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('com_id')
            ->references('com_id')
            ->on('companies')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('farmer_cmt_id')
            ->references('farmer_cmt_id')
            ->on('farmer_cmt')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('com_cmt_id')
            ->references('com_cmt_id')
            ->on('com_cmt')
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
        Schema::table('comments', function (Blueprint $table) {
            //
        });
    }
}
