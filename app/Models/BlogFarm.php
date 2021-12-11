<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogFarm extends Model
{
    protected $fillable = ['title','farm_id','url','thumbnail','description'];
    use HasFactory;
    public function farm():BelongsTo
    {
        return $this->belongsTo(Farm::class,'farm_id','id');
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

    public function scopeFarm($query, $request)
    {
        if ($request->has('farm_id')) {
            if ($request->farm_id != null) {
                $query->where('farm_id',$request->farm_id);
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

    public function getArrayThumbnailAttribute(){
        if ($this->thumbnail !=null && strlen($this->thumbnail)>0){
            $array_thumbnail = explode(',', $this->thumbnail);
            if (sizeof($array_thumbnail) > 0){
                return $array_thumbnail;
            }
        }
        return [];
    }

}
