<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['name', 'address', 'email', 'address', 'phone','thumbnail','description','created_at','updated_at','deleted_at'];

    public function getFirstImageAttribute()
    {
        $imageString = $this->thumbnail;
        if (isset($imageString)) {
            return explode(',', $imageString)[0];
        }
        return "";
    }
}
