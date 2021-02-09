<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{

    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('language')->nullable();
            $table->string('ad_name');
            $table->string('ad_size')->nullable();
            $table->string('ad_type')->nullable();
            $table->string('ad_url')->nullable();
            $table->string('ad_image')->nullable();
            $table->longText('ad_code')->nullable();
            $table->longText('ad_text')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('view_order')->default(0);
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
