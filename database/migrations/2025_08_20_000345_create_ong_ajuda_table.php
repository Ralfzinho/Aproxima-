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
        Schema::create('ong_ajuda', function (Blueprint $table) {
            $table->id();

            // Campos (FKs como colunas simples primeiro)
            $table->unsignedBigInteger('ong_id');
            $table->unsignedBigInteger('ajuda_id');

            // Evita duplicidade (mesma ONG vinculada ao mesmo tipo de ajuda mais de uma vez)
            $table->unique(['ong_id', 'ajuda_id']);

            $table->timestamps();

            // FKs no final (padrão solicitado)
            $table->foreign('ong_id')
                  ->references('id')->on('ongs')
                  ->onDelete('cascade');

            $table->foreign('ajuda_id')
                  ->references('id')->on('ajudas')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ong_ajuda');
    }
};
