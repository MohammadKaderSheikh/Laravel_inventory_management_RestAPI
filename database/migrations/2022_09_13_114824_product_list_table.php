<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_list',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('product_name',200);
            $table->string('product_code',200);
            $table->string('product_icon',200);
            $table->string('product_price',200);
            $table->string('product_category',200);
            $table->string('product_remarks',200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
