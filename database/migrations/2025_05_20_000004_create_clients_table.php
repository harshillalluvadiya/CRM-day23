<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_logo')->nullable();
            $table->string('industry')->nullable();
            $table->string('website')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code', 20)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('primary_contact_name')->nullable();
            $table->string('primary_contact_email')->nullable();
            $table->string('primary_contact_phone', 50)->nullable();
            $table->string('primary_contact_position')->nullable();
            $table->string('secondary_contact_name')->nullable();
            $table->string('secondary_contact_email')->nullable();
            $table->string('secondary_contact_phone', 50)->nullable();
            $table->unsignedBigInteger('assigned_manager_id')->nullable();
            $table->string('source')->nullable();
            $table->date('acquisition_date')->nullable();
            $table->boolean('onboarding_completed')->default(false);
            $table->integer('health_score')->nullable();
            $table->timestamp('last_interaction_date')->nullable();
            $table->text('notes')->nullable();
            $table->string('tax_id', 50)->nullable();
            $table->string('payment_terms')->nullable();
            $table->enum('status', ['active', 'inactive', 'prospect', 'churned'])->default('active');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('assigned_manager_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('clients');
    }
};