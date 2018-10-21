<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $fillable = ['foto'];
    public $timestamps = true;

    public function Kategorig()
    {
        return $this->belongsTo('App\Kategorig','kategorig_id');
    }
}
