<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table = "tbl_news";

	public function category()
	{
		return $this->belongsTo('App\category','cat_id','id');
	}
	
	public function comment()
	{
		return $this->hasMany('App\comment','n_id','id');
	}

    public $timestamps = false;
}
