<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Google extends Model
{
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'avatar',
    ];
}
