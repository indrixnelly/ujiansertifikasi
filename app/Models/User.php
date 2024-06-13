<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'username',
        'password',
        'level',
    ];

    protected $hidden = [
        'remember_token',
    ];

    protected $guarded = ['id'];
}
