<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section_Content extends Model
{
    protected $fillable = [
        'title',
        'content_type', // e.g., 'video', 'article', etc.
        'content_url',
        'section_id',
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
