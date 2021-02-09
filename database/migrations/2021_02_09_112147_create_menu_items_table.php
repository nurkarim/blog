<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('language')->nullable();
            $table->enum('is_dropdown',['yes','no'])->nullable();
            $table->integer('view_order')->default(0);
            $table->string('source')->nullable()->comment('category,page,subcategory');
            $table->string('url')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('new_tab')->default(0);
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
        Schema::dropIfExists('menu_items');
    }
}
