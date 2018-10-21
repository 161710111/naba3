<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftartabungan extends Model
{
    protected $fillable = ['nama','tempatlahir','tgllahir','jk','tanda','notanda','alamatsesuai','alamatsurat','email','rencana','pendamping','paket','jumlahwaktu','jumlahsetoran','setoran'];
    public $timestamps = true;
}
