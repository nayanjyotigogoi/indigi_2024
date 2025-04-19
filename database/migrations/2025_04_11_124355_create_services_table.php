<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');                     // e.g., SAP Support Services
            $table->string('slug', 191)->unique();           // for URL like /services/sap-support
            $table->string('tagline')->nullable();       // tagline below title
            $table->string('header_image')->nullable();    // full image URL

            $table->Text('stats_section')->nullable();       // HTML for stats (4 cards)
            $table->Text('features_section')->nullable();    // HTML for "Key Features" tab
            $table->Text('duration_section')->nullable();    // HTML for "Duration" tab
            $table->Text('details_section')->nullable();     // HTML for "Additional Details" tab
            $table->Text('cta_section')->nullable();         // HTML for CTA + benefits
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
        Schema::dropIfExists('services');
    }
}
