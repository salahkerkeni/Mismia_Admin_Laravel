<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Products extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_name';
    public $incrementing = false;
    protected $keyType = 'string';

    public function categorys(): BelongsTo
    {
        return $this->belongsTo(Categorys::class);
    }

    public function colors(): BelongsToMany
    {
        return $this->belongsToMany(Colors::class)
            ->withPivot(['image_name', 'order', 'size', 'quantity'])
            ->withTimestamps();
    }
    public function descriptions(): BelongsToMany
    {
        return $this->belongsToMany(Description::class)
            ->withPivot(['detail_description', 'sous_detail_description'])
            ->withTimestamps();
    }

}
