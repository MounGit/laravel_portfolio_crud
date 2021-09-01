<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexaboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indexabouts', function (Blueprint $table) {
            $table->id();
            $table->string('image', 50);
            $table->string('lastname');
            $table->string('firstname');
            $table->string('title');
            $table->text('description');
            $table->string('bday');
            $table->string('website');
            $table->string('phone');
            $table->string('city');
            $table->string('age');
            $table->string('degree');
            $table->string('mail');
            $table->string('freelance');
            $table->text('description2');
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
        Schema::dropIfExists('indexabouts');
    }
}
