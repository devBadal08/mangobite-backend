<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $fillable = [
        'title',
        'image',
        'description',
        'price',
        'sub_images',
    ];

    protected $casts = [
        'sub_images' => 'array',
    ];
}
