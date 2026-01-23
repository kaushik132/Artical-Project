<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('seo_title_article')->nullable();
            $table->text('seo_des_article')->nullable();
            $table->text('seo_key_article')->nullable();
            $table->string('seo_image_article')->nullable();
            $table->string('seo_title_post')->nullable();
            $table->text('seo_des_post')->nullable();
            $table->text('seo_key_post')->nullable();
            $table->string('seo_image_post')->nullable();
            $table->string('seo_title_travel_clip')->nullable();
            $table->text('seo_des_travel_clip')->nullable();
            $table->text('seo_key_travel_clip')->nullable();
            $table->string('seo_image_travel_clip')->nullable();
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
        Schema::dropIfExists('seo');
    }
}
