<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'format',
        'price',
        'stock',
        'album_listing_id'
    ];

    protected $casts = [
        'price' => 'float'
    ];

    public function albumListing()
    {
        return $this->belongsTo(AlbumListing::class);
    }

    public function discs()
    {
        return $this->hasMany(Disc::class);
    }
}
