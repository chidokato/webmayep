<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = "category";
	public function user()
	{
		return $this->belongsTo('App\user','user_id','id');
	}
	public function seo()
	{
		return $this->belongsTo('App\seo','seo_id','id');
	}
}
