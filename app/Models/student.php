<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = [
        'first_Name',
        'last_Name',
        'email',
        'password',
        'phone',
    ];
}
