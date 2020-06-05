<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jobopportunity extends Model
{
    protected $table="job_opportunity";
	protected $fillable=['title','description'];
	protected $hidden=['created_at','updated_at'];
}
