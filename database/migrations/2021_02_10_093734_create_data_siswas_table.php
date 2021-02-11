<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_siswas', function (Blueprint $table) {
            $table->id();
            $table->string('jenjang');
            $table->string('jenis_kelamin');
            $table->bigInteger('nisn')->unique();
            $table->bigInteger('nis');
            $table->bigInteger('nik');
            $table->bigInteger('npsn')->unique();
            $table->string('nama_sekolah');
            $table->dateTime('ttl');
            $table->string('agama');
            $table->string('berkhusus');
            $table->text('alamat');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('alat_transport');
            $table->string('tempat_tinggal');
            $table->string('hp');
            $table->string('email_siswa')->unique();
            $table->string('nomor_kks')->nullable();
            $table->string('penerima')->nullable();
            $table->bigInteger('no_kpps')->nullable();
            $table->string('usulan_pip')->nullable();
            $table->string('alasan_layak')->nullable();
            $table->string('penerima_kip')->nullable();
            $table->integer('nomor_kip')->nullable();
            $table->string('nama_kip')->nullable();
            $table->string('alasan_kip')->nullable();
            $table->string('no_akta');
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
        Schema::dropIfExists('data_siswas');
    }
}
