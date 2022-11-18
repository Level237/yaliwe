<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description',
        'slug',
        'status',
        'isAdmin'
    ];

    public function products():BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    public function image():BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
}
