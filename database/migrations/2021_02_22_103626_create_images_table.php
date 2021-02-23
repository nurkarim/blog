<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('disk')->nullable();
            $table->string('original_image')->nullable();
            $table->string('og_image')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('big_image')->nullable();
            $table->string('big_image_two')->nullable();
            $table->string('medium_image')->nullable();
            $table->string('medium_image_two')->nullable();
            $table->string('medium_image_three')->nullable();
            $table->string('small_image')->nullable();
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
        Schema::dropIfExists('images');
    }
}
