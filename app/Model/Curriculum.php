<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    protected $table="curriculums";
	protected $fillable=['lecture_no','course_id','title','sub_title'];
	protected $hidden=['created_at','updated_at'];

    public function course()
	
  {
    return $this->hasOne('App\Model\Course','course_id');
  }

}
