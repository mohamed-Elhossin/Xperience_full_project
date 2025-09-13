<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pay_course;
use App\Models\Section_Content;
class Section extends Model
{
    protected $fillable = [
        'title',
        'pay_course_id',
    ];

    public function payCourse()
    {
        return $this->belongsTo(Pay_course::class);
    }

public function sectionContents()
    {
        return $this->hasMany(Section_Content::class);
    }
}
