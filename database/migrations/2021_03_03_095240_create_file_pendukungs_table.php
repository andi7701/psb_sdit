<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilePendukungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_pendukungs', function (Blueprint $table) {
            $table->id();
            $table->string('kartu_keluarga');
            $table->string('akte_kelahiran');
            $table->string('ktp_ayah');
            $table->string('ktp_ibu');
            $table->string('raport_terakhir')->nullable();
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
        Schema::dropIfExists('file_pendukungs');
    }
}
