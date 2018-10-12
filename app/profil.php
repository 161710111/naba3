<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    protected $fillable = ['judul','keterangan','tentang'];
    public $timestamps = true;
}
