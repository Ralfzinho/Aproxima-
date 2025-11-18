<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('ongs', function (Blueprint $table) {
            $table->id();

            // Identificação / contato
            $table->string('org_name', 180);
            $table->string('email', 180)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');                 // manter se a ONG autenticar
            $table->string('cnpj', 14)->unique();       // apenas dígitos
            $table->smallInteger('founding_year')->nullable();

            $table->string('phone', 30)->nullable();
            $table->string('website')->nullable();

            // Endereço
            $table->string('address', 255)->nullable();
            $table->char('state', 2)->nullable();
            $table->string('city', 120)->nullable();
            $table->string('cep', 10)->nullable();

            // Operacional
            $table->text('mission');                    // se opcional, use ->nullable()
            $table->string('beneficiaries')->nullable();// "1-50", "51-200", etc.

            // Múltipla escolha — Option A: JSONB
            $table->jsonb('volunteer_types')->nullable(); // ["presencial","remoto","especializado","pontual"]

            // Escolha única
            $table->enum('frequency', ['diaria','semanal','mensal','eventual'])->nullable();

            $table->text('desired_skills')->nullable();
            $table->text('current_projects');              // se opcional, ->nullable()
            $table->string('active_volunteers')->nullable(); // "0-5","6-15", etc.

            // Contato
            $table->string('contact_name', 120);
            $table->string('contact_role', 120);

            // Preferências
            $table->boolean('newsletter')->default(false);

            $table->timestamps();

            $table->index(['state', 'city']);
        });

        // ===== CHECK constraints (sem subconsulta) =====
        DB::statement("
            ALTER TABLE ongs
            ADD CONSTRAINT ongs_state_check
            CHECK (state IS NULL OR state ~ '^[A-Z]{2}$')
        ");

        DB::statement("
            ALTER TABLE ongs
            ADD CONSTRAINT ongs_cnpj_digits_check
            CHECK (cnpj ~ '^[0-9]{14}$')
        ");

        DB::statement("
            ALTER TABLE ongs
            ADD CONSTRAINT ongs_founding_year_check
            CHECK (founding_year IS NULL OR founding_year BETWEEN 1800 AND EXTRACT(YEAR FROM CURRENT_DATE))
        ");

        DB::statement("
            ALTER TABLE ongs
            ADD CONSTRAINT ongs_volunteer_types_check
            CHECK (
                volunteer_types IS NULL
                OR (
                    jsonb_typeof(volunteer_types) = 'array'
                    AND jsonb_array_length(volunteer_types) >= 1
                    AND volunteer_types <@ '[
                        \"presencial\",
                        \"remoto\",
                        \"especializado\",
                        \"pontual\"
                    ]'::jsonb
                )
            )
        ");
    }

    public function down(): void
    {
        Schema::dropIfExists('ongs');
    }
};
