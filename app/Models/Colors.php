<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Colors extends Model
{
    use HasFactory;

    protected $primaryKey = 'color_name';
    public $incrementing = false;
    protected $keyType = 'string';

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Products::class)
            ->withPivot(['image_name', 'order', 'size', 'quantity'])
            ->withTimestamps();
    }
}
