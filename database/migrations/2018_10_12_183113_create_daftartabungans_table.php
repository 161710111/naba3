<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftartabungansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftartabungans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('tempatlahir');
            $table->date('tgllahir');
            $table->string('jk');
            $table->string('tanda');
            $table->string('notanda');
            $table->text('alamatsesuai');
            $table->text('alamatsurat');
            $table->string('email');
            $table->string('rencana');
            $table->string('pendamping');
            $table->string('paket');
            $table->string('jumlahwaktu');
            $table->string('jumlahsetoran');
            $table->string('setoran');
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
        Schema::dropIfExists('daftartabungans');
    }
}
