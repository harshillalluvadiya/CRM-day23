<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            // Basic Brand Info
             $table->string('name');            // Friendly name
            $table->string('slug')->unique();           // Slug (unique)
            $table->string('description')->nullable();  // Description

            // General Info
            $table->string('business_logo')->nullable();
            $table->string('legal_name')->unique();
            $table->string('business_email')->nullable();
            $table->string('business_phone')->nullable();
            $table->string('branded_domain')->nullable();
            $table->string('business_website')->nullable();
            $table->string('business_niche')->nullable();

            // Business Info
            $table->string('business_type')->nullable();
            $table->string('business_industry')->nullable();
            $table->string('registration_id_type')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('regions_of_operations')->nullable();

            // Address Info
            $table->string('street_address')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('time_zone')->nullable();
            $table->string('platform_language')->nullable();

            // Representative Info
            $table->string('rep_first_name')->nullable();
            $table->string('rep_last_name')->nullable();
            $table->string('rep_email')->nullable();
            $table->string('rep_job_position')->nullable();
            $table->string('rep_phone')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
