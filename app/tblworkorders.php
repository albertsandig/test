<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblworkorders extends Model
{
    protected $fillable = ['workorder_number','customer_name','customer_address',
   'create_date','customer_contact','relay_date','relayed_to','wo_status',
   'execution_date','executed_by','remarks'];
}
