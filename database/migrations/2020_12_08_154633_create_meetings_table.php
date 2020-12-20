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
            $table->dateTime('meeting_date', 0);
            $table->integer('cote1');
            $table->integer('cote2');
            $table->char('team1', '100');
            $table->char('team2', '100');
            $table->integer('result1');
            $table->integer('result2');
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
