<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manager extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'address',
        'user_id'
    ];
    protected $hidden = [
        'created_at','updated_at','deleted_at'
    ];
    protected $dates = ['deleted_at'];
//    public function user()
//    {
//        return $this->belongsTo(User::class);
//    }
}
