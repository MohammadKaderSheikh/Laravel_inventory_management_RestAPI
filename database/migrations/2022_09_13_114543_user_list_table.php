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
        Schema::create('user_list',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('fullname',200);
            $table->string('username',200);
            $table->string('roll',200);
            $table->string('lastactivity',200);
            $table->string('password',200);
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
