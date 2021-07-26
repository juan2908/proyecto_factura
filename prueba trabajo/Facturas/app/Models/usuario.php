<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class usuario extends Model
{
    use HasApiTokens, HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'ID_Type',
        'identification_number',
        'email',
        'phone',
        'password'
    ];
}
