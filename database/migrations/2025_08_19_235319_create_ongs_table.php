<?php

// database/migrations/2025_10_28_000000_create_ongs_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('ongs', function (Blueprint $table) {
            $table->id();

            // Passo 1
            $table->string('org_name');
            $table->string('cnpj', 20);
            $table->year('founding_year')->nullable();
            $table->string('email')->unique();
            $table->string('phone', 30);
            $table->string('website')->nullable();
            $table->string('address');
            $table->string('state', 2);
            $table->string('city');
            $table->string('cep', 10)->nullable();

            // Passo 2
            $table->jsonb('areas');                  // ex: ["educacao","saude"]
            $table->text('mission');
            $table->string('beneficiaries')->nullable(); // "1-50", "51-200", etc.

            // Passo 3
            $table->jsonb('volunteer_types');        // ex: ["presencial","remoto"]
            $table->text('desired_skills')->nullable();
            $table->text('current_projects');
            $table->string('frequency')->nullable(); // "diaria","semanal","mensal","eventual"
            $table->string('active_volunteers')->nullable(); // "0-5", "6-15", etc.
            $table->string('contact_name');
            $table->string('contact_role');

            // Passo 4
            $table->string('password');              // hash
            $table->boolean('newsletter')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('ongs');
    }
};

