<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorys extends Model
{
    use HasFactory;

    protected $primaryKey = 'category_name';
    public $incrementing = false;
    protected $keyType='string';

    public function products(): HasMany
    {
        return $this->hasMany(Products::class);
    }
}
