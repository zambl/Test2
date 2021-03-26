<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecettesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recettes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ingredients_id');
            $table->unsignedBigInteger('menus_id');
            $table->string('nom');
            $table->string('description');
            $table->integer('tempscuisson');
            $table->integer('quantitéingredient');
            $table->foreign('ingredients_id')->references('id')->on('ingredients');
            $table->foreign('menus_id')->references('id')->on('menus');
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
        Schema::dropIfExists('recettes');
    }
}
