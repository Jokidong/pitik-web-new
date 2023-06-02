<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_detail_pengeluaran_gaji', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pengeluaran');
            $table->foreign('id_pengeluaran')->references('id')->on('tb_pengeluaran')->onDelete('restrict');
            $table->unsignedBigInteger('id_gaji');
            $table->foreign('id_gaji')->references('id')->on('tb_gaji')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_detail_pengeluaran_gaji');
    }
};
