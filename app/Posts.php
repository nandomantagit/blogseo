<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
	use SoftDeletes;
	protected $fillable = ['judul','category_id','content','gambar','slug'];

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    //membuat eloquent many to many pada table tags dan posts
    public function tags(){
    	return $this->belongsToMany('App\Tags');
    }
}
