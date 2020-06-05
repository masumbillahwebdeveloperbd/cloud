<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table="teams";
	protected $fillable=['name','info','address','image','phone_number','designation','facebook_link','twitter_link','linkedin_link','youtube_link'];
	protected $hidden=['created_at','updated_at'];
}
