<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConstraintsToCompanyPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('company_post', function (Blueprint $table) {
            $table->foreign('com_id')
            ->references('com_id')
            ->on('companies')
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
        Schema::table('company_post', function (Blueprint $table) {
            //
        });
    }
}
