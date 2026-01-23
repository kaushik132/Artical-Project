<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelClipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_clip', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('travel_clip_id')->nullable();
            $table->string('video_link')->nullable();
            $table->string('time_duration')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('alt')->nullable();
            $table->string('short_content')->nullable();
            $table->integer('is_active')->default('1')->nullable();
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
        Schema::dropIfExists('travel_clip');
    }
}
