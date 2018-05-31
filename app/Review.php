<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $table = 'review';
    public $timestamps = true;

	public $fillable = ['responsiveness_score', 'responsiveness_review', 'layout_score', 'lauout_review', 'color_scheme', 'color_scheme_score', 'color_scheme_review', 'pagespeed_score', 'pagespeed_review', 'usability_score', 'usability_review', 'content_score', 'content_review', 'creativity_score', 'creativity_review', 'plan_id'];

	public function Website()
	{
    	return $this->belongsTo('Plans');
    }
	
}
