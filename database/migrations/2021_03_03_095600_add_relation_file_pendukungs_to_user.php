<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationFilePendukungsToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('file_pendukungs', function (Blueprint $table) {
            //
            $table->bigInteger('users_id')->unsigned();

            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('file_pendukungs', function (Blueprint $table) {
            //
            $table->dropColumn('users_id');
        });
    }
}
