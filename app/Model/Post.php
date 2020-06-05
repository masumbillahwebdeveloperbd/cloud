<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table="posts";
    protected $fillable=['title','image','post_category_id','details','user_id'];
    protected $hidden = ['created_at','updated_at'];
    public function category(){
    	return $this->hasOne('\App\Model\PostCategory','id','post_category_id');
    }
    public function user(){
    	return $this->hasOne('\App\User','id','user_id');
    }
}
