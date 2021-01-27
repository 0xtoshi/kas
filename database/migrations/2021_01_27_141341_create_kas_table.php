<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kas', function (Blueprint $table) {
            $table->bigIncrements('id_kas');
            $table->string('nominal', 12);
            $table->text('keterangan');
            $table->date('tanggal');
            $table->enum('tipe', ['kas_masuk','kas_keluar']);
            $table->bigInteger('id_nota')->unsigned();
            $table->bigInteger('id_rekening')->unsigned();
            $table->bigInteger('id_pengguna')->unsigned();
            $table->foreign('id_nota')->references('id_nota')->on('notanes');
            $table->foreign('id_rekening')->references('id_rekening')->on('rekenings');
            $table->foreign('id_pengguna')->references('id_pengguna')->on('penggunas');
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
        Schema::dropIfExists('kas');
    }
}
