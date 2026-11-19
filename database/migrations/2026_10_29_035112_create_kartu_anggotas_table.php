
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kartu_anggota', function (Blueprint $table) {
            $table->id('id_kartu');
            $table->foreignId('anggota_id')
                  ->unique()
                  ->constrained('anggota')
                  ->cascadeOnDelete();
            $table->string('nomor_kartu', 30)->unique();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kartu_anggota');
    }
};

