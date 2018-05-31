<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = 'orders';
    protected $fillable = ['email', 'product', 'user_id', 'product_id'];
}
