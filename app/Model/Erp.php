<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Erp extends Model
{
    protected $table="erps";
	protected $fillable=['title','erp_description','image'];
	protected $hidden=['created_at','updated_at'];
}
