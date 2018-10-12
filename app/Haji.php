<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Haji extends Model
{
    protected $fillable = ['judul','isi','harga','fasilitas','batal','biayamasuk','biayatidak','syarat','daftar','slug','kategoria_id'];
    public $timestamps = true;

    public function Kategoria()
    {
        return $this->belongsTo('App\Kategoria','kategoria_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }	
}
