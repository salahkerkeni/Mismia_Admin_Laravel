<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Client extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    protected $primaryKey = 'email';
    public $incrementing = false;

    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class);
    }

}
