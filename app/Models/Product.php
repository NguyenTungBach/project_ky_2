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

    public function scopeName($query, $request)
    {
        if ($request->has('name')) {
            if ($request->name != null) {
                $query->where('name', 'LIKE', '%' . $request->name . '%');
            }
        }

        return $query;
    }

    public function scopePrice($query, $request)
    {
        if ($request->has('price')) {
            if ($request->price != null) {
                switch ($request->price) {
                    case 1:
                        $query->whereBetween('price',[0,100000]);
                        break;
                    case 2:
                        $query->whereBetween('price',[100000,200000]);
                        break;
                    case 3:
                        $query->whereBetween('price',[200000,300000]);
                        break;
                    case 4:
                        $query->whereBetween('price',[300000,400000]);
                        break;
                    case 5:
                        $query->whereBetween('price',[400000,500000]);
                        break;
                    case 6:
                        $query->whereBetween('price',[500000,5000000]);
                        break;
                }
            }
        }
        return $query;
    }

    public function scopeCate($query, $request)
    {
        if ($request->has('categories')) {
            if ($request->categories != null) {
                $query->where('category_id', $request->categories);
            }
        }
        return $query;
    }

    public function scopeSortByName($query, $request)
    {
        if ($request->has('nameSort')) {
            if ($request->nameSort != null) {
                switch ($request->nameSort) {
                    case 1:
                        $query->orderBy('name', 'asc');
                        break;
                    case -1:
                        $query->orderBy('name', 'desc');
                        break;
                }
            }
        }
        return $query;
    }

    public function scopeSortByPrice($query, $request)
    {
        if ($request->has('priceSort')) {
            if ($request->priceSort != null) {
                switch ($request->priceSort) {
                    case 1:
                        $query->orderBy('price', 'asc');
                        break;
                    case -1:
                        $query->orderBy('price', 'desc');
                        break;
                }
            }
        }
        return $query;
    }
}
