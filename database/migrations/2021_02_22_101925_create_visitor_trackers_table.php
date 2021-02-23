<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorTrackersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitor_trackers', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('page_type');
            $table->string('url');
            $table->string('source_url');
            $table->ipAddress('ip');
            $table->string('agent_browser');
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
        Schema::dropIfExists('visitor_trackers');
    }
}
