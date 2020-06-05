<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table="replies";
	protected $fillable=['body','user_id','comment_id'];
	protected $hidden=['created_at','updated_at'];
}
