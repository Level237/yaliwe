<?php

namespace App\Models;

use App\Models\Store;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory;

    protected $fillable=[
        'street',
        'number',
        'city',
        'country_code'
    ];

    public function stores():HasMany
    {
        return $this->hasMany(Store::class);
    }
}
