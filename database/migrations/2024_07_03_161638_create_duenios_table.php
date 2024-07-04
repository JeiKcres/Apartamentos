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
        Schema::create('duenios', function (Blueprint $table) {
            $table->id('idDuenio');
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('correo', 100);
            $table->string('telefono',100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('duenios');
    }
};
