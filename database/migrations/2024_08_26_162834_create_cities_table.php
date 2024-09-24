<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('state_id')->constrained('states');
            $table->string('slug');
            $table->string('contact_number')->nullable();
            $table->text('excerpt')->nullable();
            $table->longText('description');
            $table->tinyInteger('status')->default(1);
            $table->string('image')->nullable();
            $table->longText('google_map')->nullable();
            $table->text('facebook')->nullable();
            $table->text('instagram')->nullable();
            $table->text('twitter')->nullable();
            $table->text('linkedIn')->nullable();
            $table->text('yelp')->nullable();
            $table->text('yellow_pages')->nullable();
            $table->string('meta_tag');
            $table->string('meta_title');
            $table->string('meta_description');
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
        Schema::dropIfExists('cities');
    }
};
