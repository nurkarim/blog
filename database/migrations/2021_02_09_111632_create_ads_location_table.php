<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads_location', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ad_id');
            $table->string('title');
            $table->enum('position',['home','login','post','register'])->nullable();
            $table->enum('sub_position',['top','down','left','right'])->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('view_order')->default(0);
            $table->integer('total_ad_show_day')->default(0);
            $table->dateTime('ad_start_date')->nullable();
            $table->dateTime('ad_end_date')->nullable();
            $table->foreign('ad_id')->references('id')->on('ads')->onDelete('cascade');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
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
        Schema::dropIfExists('ads_location');
    }
}
