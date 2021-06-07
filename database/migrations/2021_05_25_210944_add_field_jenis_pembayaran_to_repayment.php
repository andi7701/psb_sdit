<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldJenisPembayaranToRepayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('re_payments', function (Blueprint $table) {
            //
            $table->string('jenis_pembayaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('re_payments', function (Blueprint $table) {
            //
            $table->dropColumn('jenis_pembayaran');
        });
    }
}
