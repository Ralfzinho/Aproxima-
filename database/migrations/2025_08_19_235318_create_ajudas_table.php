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
        Schema::create('ajudas', function (Blueprint $table) {
            $table->id(); // id da ajuda (PK)
            $table->string('nome'); // Exemplo: Voluntariado, Doação, Mentoria, Serviços Profissionais
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ajudas');
    }
};
