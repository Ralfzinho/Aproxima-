<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('ong_causa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ong_id')->constrained('ongs')->onDelete('cascade');
            $table->foreignId('causa_id')->constrained('causas')->onDelete('cascade');
            $table->timestamps();

            $table->unique(['ong_id', 'causa_id']);
            $table->index('causa_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ong_causa');
    }
};
