<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    protected $fillable = ['name','password','phone','address','status'];
    public $timestamps = false;
    use HasFactory;

    public function orders() : HasMany
    {
        return $this->hasMany(Order::class, 'user_id', 'id');
    }
}
