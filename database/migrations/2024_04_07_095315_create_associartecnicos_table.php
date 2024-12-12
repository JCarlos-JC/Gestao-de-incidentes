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
        Schema::create('associartecnicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("associardepartamento_id");
            $table->unsignedBigInteger("tecnico_id");
            $table->timestamps();

            $table->foreign('associardepartamento_id')->references('id')->on('associardepartamentos');
            $table->foreign('tecnico_id')->references('id')->on('tecnicos');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('associartecnicos');
    }
};
