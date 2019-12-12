<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = ['name','slug'];

    //membuat eloquent many to many pada table tags dan posts
    public function posts(){
    	return $this->belongsToMany('App\Posts');
    }
}
