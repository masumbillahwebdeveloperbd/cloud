<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CourseDetail extends Model
{
    protected $table="course_details";
    protected $fillable=['course_id','cover_photo','video_link','requirement','include','course_objective','author_id'];
    protected $hidden = ['created_at','updated_at'];

}
