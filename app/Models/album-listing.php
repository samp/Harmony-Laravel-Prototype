<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class album_listing extends Model
{
    protected $fillable = [
        'name',
        'artist',
        'description',
        'cover_image'
    ];
}
