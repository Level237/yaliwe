<?php

namespace App\Models;

use App\Models\Store;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Image extends Model
{
    use HasFactory;

    protected $fillable=[
        'slug',
        'path'
    ];

    public function products():BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    public function stores():HasMany
    {
        return $this->hasMany(Store::class);
    }

    public function categories():HasMany
    {
        return $this->hasMany(Category::class);
    }
}
