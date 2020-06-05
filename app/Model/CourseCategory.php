<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    protected $table="course_categories";
    protected $fillable=['name','sub_category'];
    protected $hidden = ['created_at','updated_at'];
}
