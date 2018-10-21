<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategorig extends Model
{
    protected $fillable = ['foto'];
    public $timestamps = true;

    public function Galeri()
    {
        return $this->hasMany('App\Galeri', 'kategorig_id');
    }
}
