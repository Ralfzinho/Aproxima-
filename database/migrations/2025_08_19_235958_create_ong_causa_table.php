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
        Schema::create('ong_causa', function (Blueprint $table) {
            $table->id();

            // Campos (FKs como colunas simples primeiro)
            $table->unsignedBigInteger('ong_id');
            $table->unsignedBigInteger('causa_id');

            // Evita duplicidade (mesma ONG vinculada à mesma causa mais de uma vez)
            $table->unique(['ong_id', 'causa_id']);

            $table->timestamps();

            // FKs no final (padrão solicitado)
            $table->foreign('ong_id')
                  ->references('id')->on('ongs')
                  ->onDelete('cascade');

            $table->foreign('causa_id')
                  ->references('id')->on('causas')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ong_causa');
    }
};
