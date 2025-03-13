<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Tabel ruangan
        Schema::create('ruangan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ruangan');
            $table->integer('kapasitas');
            $table->timestamps();
        });

        // Tabel add_ons
        Schema::create('add_ons', function (Blueprint $table) {
            $table->id();
            $table->string('nama_addons');
            $table->text('deskripsi');
            $table->timestamps();
        });

        // Tabel user
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('nama_user');
            $table->string('entitas');
            $table->timestamps();
        });

        // Tabel booking
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_ruangan')->constrained('ruangan')->onDelete('cascade');
            $table->foreignId('id_addons')->nullable()->constrained('add_ons')->onDelete('set null');
            $table->foreignId('pic')->constrained('user')->onDelete('cascade');
            $table->date('tanggal');
            $table->time('jam_mulai');
            $table->time('jam_akhir');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('booking');
        Schema::dropIfExists('user');
        Schema::dropIfExists('add_ons');
        Schema::dropIfExists('ruangan');
    }
};
