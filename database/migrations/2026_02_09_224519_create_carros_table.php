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
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            
            $table->string('marca');
            $table->string('modelo');
            $table-> string('cor');
            $table->year('ano');
            $table-> string('status')->default('disponivel');
            $table->string('placa')->unique();
            $table->decimal('preco_diaria', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
};
