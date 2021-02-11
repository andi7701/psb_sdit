<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPendukungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pendukungs', function (Blueprint $table) {
            $table->id();
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->integer('jarak_rumah');
            $table->integer('jarak_rumah2');
            $table->integer('waktu_tempuh');
            $table->integer('waktu_tempuh2');
            $table->integer('jumlah_saudara');
            $table->string('jenis_prestasi')->nullable();
            $table->string('tingkat')->nullable();
            $table->string('nama_prestasi')->nullable();
            $table->integer('tahun_prestasi')->nullable();
            $table->string('penyelenggara')->nullable();
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
        Schema::dropIfExists('data_pendukungs');
    }
}
