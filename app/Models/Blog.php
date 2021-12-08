<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title','description','content','thumbnail','status','created_at','updated_at','deleted_at'];
    use HasFactory;

    public function getFirstImageAttribute()
    {
        $imageString = $this->thumbnail;
        if (isset($imageString)) {
            return explode(',', $imageString)[0];
        }
        return "";
    }

    public function scopeTitle($query, $request)
    {
        if ($request->has('title')) {
            if ($request->title != null) {
                $query->where('title', 'LIKE', '%' . $request->title . '%');
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
