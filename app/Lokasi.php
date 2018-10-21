<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $fillable = ['foto','lokasi','harga','hotel','keterangan','slug','kategoriw_id'];
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
