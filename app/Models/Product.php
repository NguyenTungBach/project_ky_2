<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'category_id', 'thumbnail', 'price', 'detail', 'description',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function getFirstImageAttribute()
    {
        $imageString = $this->thumbnail;
        if (isset($imageString)) {
            return explode(',', $imageString)[0];
        }
        return "";
    }

    function getFormatPriceAttribute(): string
    {
        return number_format($this->price, 0, ',', ' ');
    }
}
