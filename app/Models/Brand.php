<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Brand extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'state'
    ];

    public function products():BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
