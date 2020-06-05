<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table="services";
    protected $fillable=['service_category_id','title','slug','image'];
    protected $hidden = ['created_at','updated_at'];
    public function category(){
    	return $this->hasOne('\App\Model\ServiceCategory','id','service_category_id');
    }
}
