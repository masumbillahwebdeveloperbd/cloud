<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $table="service_categories";
    protected $fillable=['name'];
    protected $hidden = ['created_at','updated_at'];
}
