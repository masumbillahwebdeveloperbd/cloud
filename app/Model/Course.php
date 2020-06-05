<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table="courses";
	protected $fillable=['course_name','course_category_id','image','price'];
	protected $hidden=['created_at','updated_at'];

    public function category(){
    	return $this->hasOne('\App\Model\CourseCategory','id','course_category_id');
    }
}
