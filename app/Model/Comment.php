<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model{
    protected $table="comments";
	protected $fillable=['post_id','user_id','body','publication_status'];
	protected $hidden=['created_at','updated_at'];
}
