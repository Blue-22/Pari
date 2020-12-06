<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
            $table->dateTime('dateStart', 0);
            $table->dateTime('dateEnd', 0);
            $table->integer('cote');
            $table->char('result1', '100');
            $table->char('result2', '100');
            $table->integer('team1');
            $table->integer('team2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meetings');
    }
}
