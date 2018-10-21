<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftarhaji extends Model
{
    protected $fillable = ['foto','paket','paspor','nama','tempatlahir','tgllahir','jk','alamat','notelp','status','pekerjaan','jabatan','almkantor','notelpkantor','email','keterangan','slug','kategorid_id'];
    public $timestamps = true;
}
