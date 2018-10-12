<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hajis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->text('isi');
            $table->text('harga');
            $table->text('fasilitas');
            $table->text('batal');
            $table->text('biayamasuk');
            $table->text('biayatidak');
            $table->text('syarat');
            $table->text('daftar');
            $table->string('slug');
            $table->integer('kategoria_id');
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
        Schema::dropIfExists('hajis');
    }
}
