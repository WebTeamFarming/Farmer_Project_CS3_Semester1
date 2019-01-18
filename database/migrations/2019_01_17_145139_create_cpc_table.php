<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCpcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Company_Product_Categories', function (Blueprint $table) {
            $table->collation = 'utf8_unicode_ci';
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->increments('cpc_id');
            $table->string('name');
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
        Schema::dropIfExists('CompanyProductCategories');
    }
}
