<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('image_id');
            $table->string('title');
            $table->string('slug');
            $table->string('language');
            $table->longText('description');
            $table->tinyInteger('template')->default(1)->comment('1 without sidebar, 2 with right sidebar, 3 with left sidebar');
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('visibility')->default(1);
            $table->tinyInteger('show_for_register')->default(1);
            $table->tinyInteger('show_title')->default(1);
            $table->tinyInteger('show_breadcrumb')->default(1);
            $table->tinyInteger('page_type')->default(1);
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
