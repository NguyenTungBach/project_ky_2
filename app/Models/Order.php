<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class,'order_id','id');
    }
}
