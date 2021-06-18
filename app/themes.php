<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class themes extends Model
{
    protected $table = "themes";
    public function user()
	{
		return $this->belongsTo('App\user','user_id','id');
	}
}
