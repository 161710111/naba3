<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategorie extends Model
{
    protected $fillable = ['nama_kategori','keterangan','slug'];
    public $timestamps = true;

    public function Umroh()
    {
        return $this->hasMany('App\Umroh', 'kategorie_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
