<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('DataNamaDosen', function (Blueprint $table) {
            $table->id();
            $table->string('NamaDosen');
            $table->Char('NIDN');
            $table->char('NIP');
            $table->string('Jabatan');
            $table->string('Email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('DataNamaDosen');
    }
};
