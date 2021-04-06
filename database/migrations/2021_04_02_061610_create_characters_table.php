<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status');
            $table->string('species');
            $table->string('type');
            $table->string('gender');
            $table->string('image');

            $table->json('episode');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('origin_id');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
             $table->foreign('origin_id')->references('id')->on('origins')->onDelete('cascade');
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
        Schema::dropIfExists('characters');
    }
}
