<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galmanhaji extends Model
{
    protected $table = 'galmanhajis';
    protected $fillable = ['logo'];
    public $timestamps = true;
}
