<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();

            $table->dateTime('utcDate');
            $table->integer('hometeam_id');
            $table->integer('awayteam_id');
            $table->string('winner',50);
            $table->integer('scorehome');
            $table->integer('scoreaway');

            $table->timestamps();

            $table->foreign('hometeam_id')->references('id')->on('teams');
            $table->foreign('awayteam_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
