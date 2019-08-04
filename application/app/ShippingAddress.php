<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    protected $table = 'shipping_address';
    protected $primaryKey = 'customer_id';
    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo("App\Customers", "customer_id");
    }    
}
