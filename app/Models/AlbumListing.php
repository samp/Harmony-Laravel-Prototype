<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlbumListing extends Model
{
    protected $fillable = [
        'name',
        'artist',
        'description',
        'price',
        'genre',
        'release_date',
        'cover_image'
    ];

    public function albums()
    {
        return $this->hasMany(Album::class);
    }
}
