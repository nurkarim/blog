<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string("video_name");
            $table->string("video_thumbnail")->nullable();
            $table->string("disk")->nullable();
            $table->string("original")->nullable();
            $table->string("v_144p")->nullable();
            $table->string("v_240p")->nullable();
            $table->string("v_360p")->nullable();
            $table->string("v_480p")->nullable();
            $table->string("v_720p")->nullable();
            $table->string("v_1080p")->nullable();
            $table->string("video_type")->nullable();
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
        Schema::dropIfExists('videos');
    }
}
