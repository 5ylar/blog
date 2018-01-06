<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $fillable = [
        'title',
        'content'
    ];


    public function comments()
    {
    	return $this->hasMany('App\Models\Comment');
    }

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }

}
