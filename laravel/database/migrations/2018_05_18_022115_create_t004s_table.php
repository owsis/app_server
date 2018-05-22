<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT004sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t004s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('branchcode');
            $table->string('code');
            $table->string('name');
            $table->string('address');
            $table->string('city_code');
            $table->string('email');
            $table->string('ktp');
            $table->string('npwp');
            $table->string('phone');
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
        Schema::dropIfExists('t004s');
    }
}
