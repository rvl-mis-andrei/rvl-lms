<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoCategory extends Model
{
    use HasFactory;
    protected $table ='lms_video_categories';

    protected $fillable = [
        'name',
        'status',
        'created_by',
        'updated_by',
    ];

    public function setNameAttribute($v)
    {
        $this->attributes['name'] = strtoupper($v);
    }
}
