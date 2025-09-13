<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pay_course extends Model
{
    protected $table = 'pay_courses';
    protected $fillable = [
        'name',
        'description',
        'price',
        'hours',
        'image',
        'contentFile',
        'contentDrive',
    ];
 
    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}
