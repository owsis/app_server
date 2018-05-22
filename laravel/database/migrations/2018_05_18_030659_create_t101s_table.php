<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT101sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t101s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('branchcode');
            $table->string('booking_no');
            $table->string('code_customer');
            $table->string('name_customer');
            $table->string('code_unit');
            $table->string('type_unit');
            $table->string('first_payment');
            $table->string('type_payment');
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
        Schema::dropIfExists('t101s');
    }
}
