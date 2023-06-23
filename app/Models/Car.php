<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['login_at' , 'logout_at', 'total'];

    protected $casts = [
        'login_at' => 'datetime',
        'logout_at' => 'datetime',
        'total' => 'timestamp',
    ];
}
