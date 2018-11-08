<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
             $table->string('nombre',100)->nullable();
            $table->date('fecha')->nullable();
             $table->integer('id_locations')->unsigned();
             $table->string('objetivo')->nullable();
             $table->string('justificacion')->nullable();
             $table->string('lista')->nullable();
             $table->integer('id_user')->unsigned();
             $table->integer('id_lines')->unsigned();
              $table->integer('id_activities')->unsigned();
               $table->foreign('id_locations')->references('id')->on('locations');
              $table->foreign('id_activities')->references('id')->on('activities');
               $table->foreign('id_user')->references('id')->on('users');
               $table->foreign('id_lines')->references('id')->on('lines');
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
        Schema::dropIfExists('events');
    }
}
