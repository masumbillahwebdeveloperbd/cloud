<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $table="post_categories";
	protected $fillable=['name','sub_category'];
	protected $hidden=['created_at','updated_at'];

	
	public function category(){
    	return $this->hasOne('\App\Model\PostCategory','id','sub_category');
    }


  public function children()
  {
    return $this->hasMany('App\Model\PostCategory', 'sub_category');
  }

}
