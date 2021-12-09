<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class District extends Model
{
    public $timestamps = false;
    use HasFactory;
    public $incrementing = false;
    protected $fillable = ['id','name'];

    public function wards() : HasMany
    {
        return $this->hasMany(Ward::class);
    }
}
