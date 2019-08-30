<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Workorders extends Model
{
	public $timestamps = false;
	protected $fillable = ['user_id','workordertype_id','customer_name','customer_address',
	'creation_timestamp','customer_contact','relay_timestamp','recipient','wo_status',
	'execution_timestamp','executed_by','remarks'];

	public function getWorkordersByDepartment($service_area){
		return $this->belongsTo('App\Users','user_id')->where('sa', $service_area);
	}
}
