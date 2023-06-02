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
        Schema::create('tb_detail_pengeluaran_pakan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pengeluaran');
            $table->foreign('id_pengeluaran')->references('id')->on('tb_pengeluaran')->onDelete('restrict');
            $table->unsignedBigInteger('id_pakan');
            $table->foreign('id_pakan')->references('id')->on('tb_pakan')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_detail_pengeluaran_pakan');
    }
};