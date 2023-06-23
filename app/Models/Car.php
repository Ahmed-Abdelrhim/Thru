<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['login_at' , 'logout_at', 'total'];

    protected $casts = [
        'login_at' => 'datetime:d-m-Y H:i:s',
        'logout_at' => 'datetime:d-m-Y H:i:s',
        'total' => 'integer',
    ];
}
