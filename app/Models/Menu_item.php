<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu_item extends Model
{
    protected $fillable = [
        'category_id',
        'menu_name',
        'price',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class, 'category_id');
    }
}
