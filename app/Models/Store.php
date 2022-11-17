<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Address;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Store extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'address_id',
        'image_id',
        'status'
    ];


    public function image():BelongsTo
    {
        return $this->belongsTo(Image::class);
    }

    public function adress():BelongsTo

    {
        return $this->belongsTo(Address::class);
    }
}
