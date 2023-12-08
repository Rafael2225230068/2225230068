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
        //
        Schema::create('rafaelyehuda', function (Blueprint $table) {
            $table->string('Nama');
            $table->char('NIM');
            $table->string('Jurusan');
            $table->string('Semester');
            $table->Char('NomorTelepon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('rafaelyehuda');
    }
};
