<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $table = 'instructors';
    protected $fillable = [
        'name',
        'phone',
        'email',
        'linkedIn',
        'github',
        'cv',
    ];
}
