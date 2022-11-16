<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Review extends Model
{
    use HasFactory;


    protected $fillable=[
        'star',
        'comment',
        'state'
    ];
    public function products():BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
