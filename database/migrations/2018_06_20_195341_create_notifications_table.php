<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('type')->default('interest_request');
            $table->integer('sent_user_id')->nullable();
            $table->string('content')->nullable();
            $table->string('url')->nullable();
            $table->string('timestamp');
            $table->boolean('active')->default('1');
            $table->timestamps();
        });


        //types
        //interest_request
        //system_notification
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
