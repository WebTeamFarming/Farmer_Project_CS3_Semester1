<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConstraintsToPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('photos', function (Blueprint $table) {
            $table->foreign('fp_id')
            ->references('fp_id')
            ->on('farmer_products')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('cp_id')
            ->references('cp_id')
            ->on('company_products')
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
        Schema::table('photos', function (Blueprint $table) {
            //
        });
    }
}
