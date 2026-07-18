<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'main_image',
        'video',
        'description',
        'gallery_images',
    ];

    protected $casts = [
        'gallery_images' => 'array',
    ];
}
