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
        Schema::create('proyeccions', function (Blueprint $table) {
            $table->id();
            $table->double('costo')->nullable();
            $table->unsignedBigInteger('habitantes')->nullable();
            $table->unsignedBigInteger('extranjeros')->nullable();
            $table->unsignedBigInteger('habitantes_santa_cruz')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyeccions');
    }
};
