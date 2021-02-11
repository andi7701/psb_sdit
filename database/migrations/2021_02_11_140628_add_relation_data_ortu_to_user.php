<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationDataOrtuToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_ortus', function (Blueprint $table) {
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
        Schema::table('data_ortus', function (Blueprint $table) {
            //
            $table->dropColumn('users_id');
        });
    }
}
