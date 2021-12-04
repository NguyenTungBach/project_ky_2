<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderDetail extends Pivot
{
    use HasFactory;
    protected $table = 'order_details';

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    function getFormatPriceAttribute(): string //dữ liệu trả về là string
    {
        return number_format($this->unit_price);
    }


}
