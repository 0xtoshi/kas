<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notanes', function (Blueprint $table) {
            $table->bigIncrements('id_nota');
            $table->text('nama_gambar');
            $table->text('diskripsi');
            $table->text('lokasi_gambar');
            $table->timestamps();
        });

        DB::table('notanes')->insert(
            array(
                'nama_gambar' => 'no_img.jpg',
                'diskripsi' => 'no_img.jpg',
                'lokasi_gambar' => 'no_img.jpg'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
}
