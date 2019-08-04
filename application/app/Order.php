<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    public $timestamps = false;

    public function customer(){
        return $this->belongsTo("App\Customers", "customer_id");
    }    
}
