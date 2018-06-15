<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivacySettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privacy_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->boolean('email')->default('0');
            $table->boolean('dob')->default('0');
            $table->boolean('mobile_number')->default('0');
            $table->boolean('address')->default('0');
            $table->boolean('income')->default('0');
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
        Schema::dropIfExists('privacy_settings');
    }
}
