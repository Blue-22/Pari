<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paris', function (Blueprint $table) {
            $table->id();
            $table->integer('BetSum');
            $table->char('BetOn', '100');
            $table->integer('result1');
            $table->integer('result2');
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('meetingId');
            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('meetingId')->references('id')->on('meetings');
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
        Schema::dropIfExists('paris');
    }
}
