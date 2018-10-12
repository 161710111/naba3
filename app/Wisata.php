<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $fillable = ['judul','isi','foto','lokasi','harga','hotel','keterangan','slug','kategoriw_id'];
    public $timestamps = true;

    public function Kategoriw()
    {
        return $this->belongsTo('App\Kategoriw','kategoriw_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
