<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructorStyleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructor_style', function (Blueprint $table) {
            $table->id();
            $table->unique(['instructor_id','style_id']);
            $table->unsignedBigInteger('instructor_id');
            $table->unsignedBigInteger('style_id');
            $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete('cascade');;
            $table->foreign('style_id')->references('id')->on('styles');
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
        Schema::dropIfExists('instructor_style');
    }
}
