<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = ['foto','judul','isi','slug','kategori_id'];
    public $timestamps = true;

    public function Kategori()
    {
        return $this->belongsTo('App\Kategori','kategori_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
