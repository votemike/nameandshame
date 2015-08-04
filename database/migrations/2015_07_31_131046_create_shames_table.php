<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shames', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number_plate_id')->unsigned();
            $table->string('link');
            $table->integer('reason_id')->unsigned();
            $table->timestamp('taken_at')->nullable();
            $table->timestamps();

            $table->foreign('number_plate_id')->references('id')->on('number_plates')->onDelete('cascade');
            $table->foreign('reason_id')->references('id')->on('reasons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shames');
    }
}
