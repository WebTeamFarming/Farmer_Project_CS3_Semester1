<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOneMoreConstraintToFarmerProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('farmer_products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            //$table->integer('fpc_id')->unsigned();
            $table->foreign('fpc_id')
            ->references('fpc_id')
            ->on('farmer_product_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('farmer_products', function (Blueprint $table) {
            //
        });
    }
}
