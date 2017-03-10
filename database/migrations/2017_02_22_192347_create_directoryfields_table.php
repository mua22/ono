<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectoryfieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('directory_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('directory_id')->unsigned();
            $table->integer('field_id')->unsigned();
            $table->foreign('directory_id')->references('id')->on('directories');
            $table->foreign('field_id')->references('id')->on('fields');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('directoryfields');
    }
}
