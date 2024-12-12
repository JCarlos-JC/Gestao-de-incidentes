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
        Schema::create('associardepartamentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("incidente_id");
            $table->unsignedBigInteger("departamento_id");
            $table->timestamps();
            
            $table->foreign('incidente_id')->references('id')->on('incidentes');
            $table->foreign('departamento_id')->references('id')->on('departamentos');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('associardepartamentos');
    }
};
