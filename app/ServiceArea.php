<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceArea extends Model
{
    public $timestamps = false;
	protected $fillable = ['id','code','name'];
}
