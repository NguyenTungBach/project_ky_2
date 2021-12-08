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

    public function scopeName($query, $request)
    {
        if ($request->has('name')) {
            if ($request->name != null) {
                $query->where('name', 'LIKE', '%' . $request->name . '%');
            }
        }
        return $query;
    }

    public function scopeEmail($query, $request)
    {
        if ($request->has('phone')) {
            if ($request->email != null) {
                $query->where('email', 'LIKE', '%' . $request->email . '%');
            }
        }
        return $query;
    }

    public function scopePhone($query, $request)
    {
        if ($request->has('phone')) {
            if ($request->phone != null) {
                $query->where('phone', 'LIKE', '%' . $request->phone . '%');
            }
        }
        return $query;
    }

    public function scopeStatus($query, $request)
    {
        if ($request->has('status')){
            if ($request->status != null){
                $query->where('status',$request->status);
            }
        }
        return $query;
    }
}
