<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Umroh extends Model
{
    protected $fillable = ['judul','isi','slug','kategorie_id'];
    public $timestamps = true;

    public function Kategorie()
    {
        return $this->belongsTo('App\Kategorie','kategorie_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
