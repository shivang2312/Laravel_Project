<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
	public $table = 'about';
    public $timestamps = false;

    protected $fillable = ['meetourteam'];
}
