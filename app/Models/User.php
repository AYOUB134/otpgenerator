<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    // Specify the table name
    protected $table = 'user';

    // Fillable fields
    protected $fillable = [
        'username',
        'password',
        'status',
        'credit',
        'frpcredit',
        'sckeys',
        'regBy',
        'email',
        'telegram_chat_id',
    ];
}
