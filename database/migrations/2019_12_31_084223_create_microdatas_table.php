<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMicrodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('microdatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_data');
            $table->string('survei');
            $table->integer('size');
            $table->string('file');
            $table->char('tahun',4);
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
        Schema::dropIfExists('microdatas');
    }
}
