<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evalutionmethod extends Model
{
    public $table = 'evalutionmethod';
    public $timestamps = false;

    protected $fillable = ['description'];
}
