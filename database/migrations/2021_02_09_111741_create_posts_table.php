<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('sub_category_id')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('content')->nullable();
            $table->string('language')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->enum('post_type',['article','video'])->nullable();
            $table->tinyInteger('submitted')->default(0);
            $table->tinyInteger('visibility')->default(0);
            $table->tinyInteger('auth_required')->default(0);
            $table->unsignedInteger('image_id')->nullable();
            $table->tinyInteger('slider')->default(0);
            $table->tinyInteger('slider_order')->default(0);
            $table->tinyInteger('featured')->default(0);
            $table->tinyInteger('featured_order')->default(0);
            $table->tinyInteger('breaking')->default(0);
            $table->tinyInteger('breaking_order')->default(0);
            $table->tinyInteger('recommended')->default(0);
            $table->tinyInteger('recommended_order')->default(0);
            $table->tinyInteger('scheduled')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->string('meta_title')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->json('tag_id')->nullable();
            $table->date('scheduled_date')->nullable();
            $table->unsignedInteger('video_id')->nullable();
            $table->tinyInteger('video_url_type')->nullable();
            $table->string('video_url')->nullable();
            $table->string('video_thumbnail')->nullable();
            $table->double('total_view')->default(0);
            $table->double('total_comment')->default(0);
            $table->integer('view_order')->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('posts');
    }
}
