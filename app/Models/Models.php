<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Models extends Model
{
    use HasFactory;

    protected $primaryKey = 'model_name';
    public $incrementing = false;
    protected $keyType = 'string';

    public function categorys(): HasMany
    {
        return $this->hasMany(Categorys::class);
    }
}
