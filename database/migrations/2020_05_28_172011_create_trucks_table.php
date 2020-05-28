<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trucks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('make_id');
            $table->unsignedInteger('year');
            $table->string('owner');
            $table->unsignedInteger('owner_number')->nullable();
            $table->text('comments')->nullable();
            $table->foreign('make_id')->references('id')->on('manufacturers');

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
        Schema::dropIfExists('trucks');
    }
}
