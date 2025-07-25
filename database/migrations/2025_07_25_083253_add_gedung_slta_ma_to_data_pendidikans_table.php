<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('data_pendidikans', function (Blueprint $table) {
            $table->integer('gedung_slta_ma')->default(0)->after('gedung_sltp_mts');
        });
    }

    public function down()
    {
        Schema::table('data_pendidikans', function (Blueprint $table) {
            $table->dropColumn('gedung_slta_ma');
        });
    }
};
