<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inboundsms extends Model
{
    public $timestamps = false;
	protected $fillable = [
		'id','sms_timestamp','sms_from','message'
	];


	public function get_sender(){
		return $this->belongsTo('App\User','created_by');
	}
}
