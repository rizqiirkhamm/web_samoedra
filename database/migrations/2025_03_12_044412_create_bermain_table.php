<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBermainTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bermain', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('phone');
            $table->integer('duration'); // Durasi dalam jam
            $table->time('selected_time'); // Jam yang dipilih client
            $table->time('start_time')->nullable(); // Jam mulai aktual
            $table->time('end_time')->nullable(); // Jam selesai
            $table->enum('day', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']);
            $table->date('date');
            $table->string('payment_proof');
            $table->enum('status', ['waiting', 'playing', 'finished'])->default('waiting');
            $table->integer('remaining_time')->nullable(); // dalam detik
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bermain');
    }
}
