<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('slug', 130);
            $table->string('tagline')->nullable();
            $table->string('tags')->nullable();
            $table->text('excerpt')->nullable();
            $table->longText('content')->nullable();
            $table->string('portrait')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('banner_image')->nullable();
            $table->text('video')->nullable();
            $table->text('playlist')->nullable();
            $table->string('level')->nullable();
            $table->boolean('premium')->default(true);
            $table->boolean('is_live')->default(false);
            $table->text('facebook_pixel')->nullable();
            $table->string('type')->nullable();
            $table->time('duration')->nullable();
            $table->integer('order')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
