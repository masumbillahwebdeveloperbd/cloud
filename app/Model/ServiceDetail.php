<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    protected $table="service_details";
    protected $fillable=['service_id','sell_count','rating','details','price'];
    protected $hidden = ['created_at','updated_at'];

    public function service(){
    	return $this->hashOne('App\Model\Service','id','service_id');
    }
}

