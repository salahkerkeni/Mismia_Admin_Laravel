<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Description extends Model
{
    use HasFactory;

    protected $primaryKey = 'description_name';
    public $incrementing = false;
    protected $keyType = 'string';


    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Products::class)
            ->withPivot(['detail_description', 'sous_detail_description'])
            ->withTimestamps();
    }

}
