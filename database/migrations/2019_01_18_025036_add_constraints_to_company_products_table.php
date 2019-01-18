<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConstraintsToCompanyProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('company_products', function (Blueprint $table) {
            $table->foreign('cpc_id')
            ->references('cpc_id')
            ->on('company_product_categories')
            ->onDelete('restrict')
            ->onUpdate('cascade');

            $table->foreign('com_id')
            ->references('com_id')
            ->on('companies')
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
        Schema::table('company_products', function (Blueprint $table) {
            //
        });
    }
}
