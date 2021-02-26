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
            $table->string('status_member');
            $table->string('jenjang');
            $table->string('jenis_kelamin');
            $table->bigInteger('nisn')->unique()->nullable(); //untuk TK Bagaimana?
            $table->bigInteger('nis')->nullable();
            $table->bigInteger('nik');
            $table->bigInteger('npsn')->unique()->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('tempat_lahir');
            $table->date('ttl'); 
            $table->string('agama');
            $table->string('berkhusus');
            $table->text('alamat');
            $table->string('alat_transport');
            $table->string('tempat_tinggal');
            $table->string('hp')->nullable();
            $table->string('email_siswa')->unique()->nullable();
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
