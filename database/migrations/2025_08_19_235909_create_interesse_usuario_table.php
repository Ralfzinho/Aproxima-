<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('interesse_usuario', function (Blueprint $table) {
            $table->id();

            // FKs
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('causa_id')->constrained('causas')->cascadeOnDelete();

            // Campo opcional de auditoria
            $table->timestamp('data_interesse')->useCurrent();

            $table->timestamps();

            // Evita interesse duplicado na mesma causa
            $table->unique(['user_id', 'causa_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('interesse_usuario');
    }
};
