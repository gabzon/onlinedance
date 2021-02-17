<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('fb_pixel')->nullable();
            $table->string('google_analytics')->nullable();
            $table->string('theme_mode')->nullable();                        
            $table->text('about')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('youtube')->nullable();
            $table->string('snapchat')->nullable();
            $table->longtext('terms')->nullable();
            $table->longtext('privacy')->nullable();
            $table->string('plan_name')->nullable();
            $table->string('payment_gateway')->nullable();
            $table->float('monthly_price')->nullable();
            $table->float('yearly_price')->nullable();
            $table->integer('trail_days')->nullable();
            $table->string('currency')->nullable();
            $table->longtext('faq')->nullable();
            $table->text('landing_hero')->nullable();
            $table->text('dashboard_hero')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
