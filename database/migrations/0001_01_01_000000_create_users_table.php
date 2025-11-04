<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('email', 150)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date(column: 'dta_nascimento');
            
            $table->string('telefone', 30)->nullable();
            $table->char('estado', 2)->nullable();
            $table->string('cidade', 100)->nullable();

            $table->enum('tipo', ['voluntario', 'doador', 'representante', 'admin'])
                  ->default('voluntario');

            $table->string('profissao', 120)->nullable();
            $table->text('habilidades')->nullable();

            $table->enum('disponibilidade',['finais_semana','dias_semanas','noites','manhas','flexivel'])->nullable();
            $table->enum('experiencia',['nunca','pouca','moderada','bastante'])->nullable();
            $table->enum('tempo_semana',['h1_2','h3_5','h6_10','h10_plus'])->nullable();
            

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
    }
};
