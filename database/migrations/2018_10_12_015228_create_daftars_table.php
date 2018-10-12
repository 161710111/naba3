<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto');
            $table->text('paket');
            $table->string('paspor');
            $table->string('nama');
            $table->string('tempatlahir');
            $table->date('tgllahir');
            $table->string('jk');
            $table->text('alamat');
            $table->string('notelp');
            $table->string('status');
            $table->string('pekerjaan');
            $table->string('jabatan');
            $table->text('almkantor');
            $table->string('notelpkantor');
            $table->string('email');
            $table->text('keterangan');
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
        Schema::dropIfExists('daftars');
    }
}
