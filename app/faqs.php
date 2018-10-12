<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faqs extends Model
{
    protected $table = 'faqs';
    protected $fillable = ['pertanyaan','jawaban'];
    public $timestamps = true;
}
