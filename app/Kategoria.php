<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategoria extends Model
{
   	protected $fillable = ['nama_kategori','slug'];
    public $timestamps = true;

    public function Haji()
    {
        return $this->hasMany('App\Haji', 'kategoria_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
