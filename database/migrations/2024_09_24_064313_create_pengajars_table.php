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
        Schema::create('pengajars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->constrained(
                table: 'gurus',
                indexName: 'pengajars_guru_id',
            );
            $table->foreignId('kelas_id')->constrained(
                table: 'kelas',
                indexName: 'pengajars_kelas_id',
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajars');
    }
};
