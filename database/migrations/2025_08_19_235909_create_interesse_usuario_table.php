<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('interesse_usuario', function (Blueprint $table) {
            $table->id();

            // FK -> users
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->onDelete('cascade');

            // FK -> ongs
            $table->foreignId('ong_id')
                  ->constrained('ongs')
                  ->onDelete('cascade');

            // Campo adicional
            $table->timestamp('data_interesse')->useCurrent();

            $table->timestamps();

            // Garantir que o mesmo usuário não registre interesse repetido na mesma ONG
            $table->unique(['user_id', 'ong_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interesse_usuario');
    }
};
