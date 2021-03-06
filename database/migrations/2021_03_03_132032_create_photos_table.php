<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menus_id');
            $table->foreign('menus_id')->references('id')->on('menus');
            $table->string('image');
            $table->boolean('img_principale')->default(0);
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
        Schema::dropIfExists('photos');
    }
}
