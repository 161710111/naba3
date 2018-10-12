<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeriwisata extends Model
{
    protected $table = 'galeriwisatas';
    protected $fillable = ['logo'];
    public $timestamps = true;
}
