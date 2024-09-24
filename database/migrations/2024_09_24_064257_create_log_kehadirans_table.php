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
        Schema::create('log_kehadirans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained(
                table: 'siswas',
                indexName: 'log_siswa_id',
            );
            $table->foreignId('kelas_id')->constrained(
                table: 'kelas',
                indexName: 'posts_kelas_id',
            );
            $table->date('tanggal')->default(now());
            $table->boolean('hadir')->default(false);
            $table->boolean('sakit')->default(false);
            $table->boolean('izin')->default(false);
            $table->boolean('alpa')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_kehadirans');
    }
};
