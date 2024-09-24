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
        Schema::create('logkehadirans', function (Blueprint $table) {
            $table->id();
            
            $table->integer( 'siswa_id'); // Ubah menjadi integer agar sesuai dengan nip di tabel siswas
            $table->foreign('siswa_id', 'log_siswa_id')->references('nis')->on('siswas')->onDelete('cascade');
            $table->foreignId('kelas_id')->constrained(
                table: 'kelas',
                indexName: 'log_kelas_id',
            );
            $table->date('tanggal')->default(now());
            $table->string('status')->default('');
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
