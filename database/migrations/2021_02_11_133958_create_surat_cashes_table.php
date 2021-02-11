<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratCashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_cashes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('dpp_bayar');
            $table->bigInteger('spp_bulan');
            $table->bigInteger('seragam');
            $table->bigInteger('atk');
            $table->bigInteger('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_cashes');
    }
}
