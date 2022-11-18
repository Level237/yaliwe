<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Cart;
use App\Models\User;
use App\Models\Brand;
use App\Models\Image;
use App\Models\Review;
use App\Models\Feature;
use App\Models\Category;
use App\Models\Dimension;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description',
        'slug',
        'isNew',
        'position',
        'isFeatured',
        'unit_price',
        'stock_quantity',
        'nature'
    ];

    public function dimensions():BelongsToMany
    {
        return $this->belongsToMany(Dimension::class);
    }

    public function features():BelongsToMany
    {
        return $this->belongsToMany(Feature::class);
    }

    public function reviews():BelongsToMany
    {
        return $this->belongsToMany(Review::class);
    }

    public function images():BelongsToMany
    {
        return $this->belongsToMany(Image::class);
    }

    public function brands():BelongsToMany
    {
        return $this->belongsToMany(Brand::class);
    }

    public function users():BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function categories():BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function carts():BelongsToMany
    {
        return $this->belongsToMany(Cart::class);
    }

    public function tags():BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
