<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workordertype extends Model
{
    public $timestamps = false;
	protected $fillable = ['id','WOName','response_time'];

	public function getWorderName(){
		return $this->belongsTo('App\Workorders');
	}
}
