<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->unique();
            $table->string('name');
            $table->bigInteger('position_id')->unsigned();
            $table->bigInteger('level_id')->unsigned();
            $table->timestamps();

            $table->foreign('position_id')
                  ->references('id')->on('positions')
                  ->cascadeOnDelete();
            $table->foreign('level_id')
                  ->references('id')->on('levels')
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
        Schema::dropIfExists('employees');
    }
}
