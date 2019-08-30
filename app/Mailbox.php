<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Mailbox extends Model
{
	public $timestamps = false;
	protected $fillable = [
		'created_by','to_user','subject','message'
	];


	public function get_sender(){
		return $this->belongsTo('App\User','created_by');
	}
}
