<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galmanumroh extends Model
{
    protected $table = 'galmanumrohs';
    protected $fillable = ['logo'];
    public $timestamps = true;
}
