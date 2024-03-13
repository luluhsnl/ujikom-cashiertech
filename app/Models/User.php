<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiToken;

class User extends Model
{
    use HasFactory;
protected $table = 'user';
    protected $fillable = [
        'username',
        'email',
        'password',
        'role',
    ];
    protected $hidden = [
        'password',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}

