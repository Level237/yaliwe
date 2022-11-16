<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Feature extends Model
{
    use HasFactory;


    protected $fillable=[
        'color',
        'size'
    ];
    public function products():BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
