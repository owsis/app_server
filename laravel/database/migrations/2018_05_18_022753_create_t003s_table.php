<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT003sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t003s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('branchcode');
            $table->string('code_unit');
            $table->string('type_unit');
            $table->string('block_unit');
            $table->string('no_unit');
            $table->string('lt_unit');
            $table->string('lb_unit');
            $table->string('status_unit');
            $table->string('code_customer');
            $table->string('name_customer');
            $table->string('price');
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
        Schema::dropIfExists('t003s');
    }
}
