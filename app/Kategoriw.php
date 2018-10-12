<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategoriw extends Model
{
    protected $fillable = ['nama_kategori','slug'];
    public $timestamps = true;

    public function Wisata()
    {
        return $this->hasMany('App\Wisata', 'kategoriw_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
