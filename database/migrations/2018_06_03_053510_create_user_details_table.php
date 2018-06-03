<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('nationality');
            $table->string('religion');
            $table->string('maritalstatus');
            $table->string('height');
            $table->string('dop');
            $table->string('mobilenumber')->nullable();
            $table->string('address');
            $table->string('district');
            $table->string('workingsector');
            $table->string('workingas')->nullable();
            $table->string('profession')->nullable();
            $table->string('income')->nullable();
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
        Schema::dropIfExists('user_details');
    }
}
