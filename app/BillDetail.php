<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = "bill_detail";
    public function products(){
    	return $this->belongsTo('App\Products','id_product','id');
    }
    public function bill(){
    	return $this->belongsTo('App\Bill','id_bill','id');
    }
}