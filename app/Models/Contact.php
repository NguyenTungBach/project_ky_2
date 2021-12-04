<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps = false;
    public $fillable = ['name','email','address','phone','message'];
    use HasFactory;

    function getHandlerStatusAttribute(): string //dữ liệu trả về là string
    {
        $text = '';
        $status = $this->status;
        if ($status == 1) {
            $text = "Chưa đọc";
        }
        if ($status == 2) {
            $text = "Đã đọc";
        }
        if ($status == 0) {
            $text = 'Đã xoá';
        }
        return $text;
    }

    public function scopeName($query, $request)
    {
        if ($request->has('name')) {
            if ($request->name != null) {
                $query->where('status','!=',0);
                $query->where('name', 'LIKE', '%' . $request->name . '%');
            }
        }
        return $query;
    }

    public function scopeEmail($query, $request)
    {
        if ($request->has('phone')) {
            if ($request->email != null) {
                $query->where('status','!=',0);
                $query->where('email', 'LIKE', '%' . $request->email . '%');
            }
        }
        return $query;
    }

    public function scopePhone($query, $request)
    {
        if ($request->has('phone')) {
            if ($request->phone != null) {
                $query->where('status','!=',0);
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
