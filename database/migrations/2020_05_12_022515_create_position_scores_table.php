<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('position_scores', function (Blueprint $table) {
            $table->id();
            $table->year('year');
            $table->bigInteger('employee_id')->unsigned();
            $table->bigInteger('score_id')->unsigned();
            $table->timestamps();

            $table->foreign('employee_id')
                  ->references('id')->on('employees')
                  ->cascadeOnDelete();

            $table->foreign('score_id')
                  ->references('id')->on('scores')
                  ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('position_scores');
    }
}
