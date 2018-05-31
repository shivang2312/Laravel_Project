<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    public $table = 'plans';
    public $timestamps = false;

	public $fillable = ['websitename', 'websiteurl', 'ownername', 'designername', 'category', 'country', 'description', 'plan', 'user_id', 'product_image'];

	public function user()
	{
    	return $this->belongsTo('User');
    }

    public function getReview(){
        return $this->hasone('Review');   
    }

}
