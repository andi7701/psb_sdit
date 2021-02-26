<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataOrtusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_ortus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ayah');
            $table->string('tahun_lahir');
            $table->text('alamat_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');
            $table->string('gelar_ayah')->nullable();
            $table->string('email_ayah')->nullable();
            $table->string('no_hp_ayah')->nullable();
            $table->string('nama_ibu');
            $table->string('tahun_lahir_ibu');
            $table->text('alamat_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu');
            $table->string('gelar_ibu')->nullable();
            $table->string('email_ibu')->nullable();
            $table->string('no_hp_ibu')->nullable();
            $table->string('nama_wali')->nullable();
            $table->string('tahun_lahir_wali')->nullable();
            $table->text('alamat_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('penghasilan_wali')->nullable();
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
        Schema::dropIfExists('data_ortus');
    }
}
