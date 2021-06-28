<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Addreachus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reachus', function (Blueprint $table) {
            $table->id("id_req");
            $table->string('name');
            $table->string('company');
            $table->string('phone');
            $table->string('email');
            $table->time('time');
            $table->date('date');
            $table->longText('desc');
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
        Schema::table('reachus', function (Blueprint $table) {
            Schema::dropIfExists('reachus');
        });
    }
}
