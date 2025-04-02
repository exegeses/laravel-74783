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
        Schema::create('personas', function (Blueprint $table) {
            $table->id(); //int autoincrement primary key
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->integer('dni');
            $table->date('nacimiento');
            $table->timestamps(); // updated_at && created_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
