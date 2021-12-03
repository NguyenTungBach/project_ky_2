<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    function getFormatPriceAttribute(): string //dữ liệu trả về là string
    {
        return number_format($this->unit_price);
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }


}
