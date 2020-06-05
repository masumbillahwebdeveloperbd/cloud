<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table="events";
	protected $fillable=['date','title','description','image'];
	protected $hidden=['created_at','updated_at'];
}
