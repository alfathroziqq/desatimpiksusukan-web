<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApbDesaTable extends Migration
{
    public function up()
    {
        Schema::create('apb_desa', function (Blueprint $table) {
            $table->id();
            $table->year('tahun');

            // Pendapatan
            $table->bigInteger('pendapatan_asli_desa_anggaran')->default(0);
            $table->bigInteger('pendapatan_asli_desa_realisasi')->default(0);

            $table->bigInteger('pendapatan_transfer_anggaran')->default(0);
            $table->bigInteger('pendapatan_transfer_realisasi')->default(0);

            $table->bigInteger('pendapatan_lain_anggaran')->default(0);
            $table->bigInteger('pendapatan_lain_realisasi')->default(0);

            // Belanja
            $table->bigInteger('belanja_penyelenggaraan_anggaran')->default(0);
            $table->bigInteger('belanja_penyelenggaraan_realisasi')->default(0);

            $table->bigInteger('belanja_pembangunan_anggaran')->default(0);
            $table->bigInteger('belanja_pembangunan_realisasi')->default(0);

            $table->bigInteger('belanja_kemasyarakatan_anggaran')->default(0);
            $table->bigInteger('belanja_kemasyarakatan_realisasi')->default(0);

            $table->bigInteger('belanja_pemberdayaan_anggaran')->default(0);
            $table->bigInteger('belanja_pemberdayaan_realisasi')->default(0);

            $table->bigInteger('belanja_bencana_anggaran')->default(0);
            $table->bigInteger('belanja_bencana_realisasi')->default(0);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('apb_desa');
    }
}
