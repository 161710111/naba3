<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Kategori extends Model
{
    protected $fillable = ['nama_kategori','slug'];
    public $timestamps = true;

    public function Berita()
    {
        return $this->hasMany('App\Berita', 'kategori_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
