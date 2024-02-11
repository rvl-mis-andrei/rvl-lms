<?php

namespace App\Models\System;

use App\Traits\EncryptableIdTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingVideos extends Model
{
    use HasFactory, EncryptableIdTrait;

    protected $table ='lms_training_videos';

    protected $fillable = [
        'title',
        'description',
        'thumbnail',
        'category_id',
        'filename',
        'video_folder',
        'created_by',
    ];
    protected $hidden = ['id'];

    public function setTitleAttribute($v)
    {
        $this->attributes['title'] = ucwords($v);
    }

    public function setDescriptionAttribute($v)
    {
        $this->attributes['description'] = ucwords($v);
    }

}
