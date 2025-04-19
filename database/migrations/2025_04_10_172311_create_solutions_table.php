<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solutions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug', 191)->unique();
            // for clean URLs like /solutions/grow-with-sap
            $table->string('tagline')->nullable();
            $table->text('overview')->nullable();
            $table->json('testimonials')->nullable(); // store quote & author
            $table->text('highlights')->nullable();
            $table->text('who_can_opt')->nullable();
            $table->text('ideal_for')->nullable();
            $table->text('key_benefits')->nullable();
            $table->text('business_impact')->nullable();

            $table->integer('impact_efficiency')->default(0);
            $table->integer('impact_reporting')->default(0);
            $table->integer('impact_cost')->default(0);
            $table->text('how_it_works')->nullable();
            $table->text('implementation')->nullable();
            $table->string('image')->nullable(); // for card image
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
        Schema::dropIfExists('solutions');
    }
}
