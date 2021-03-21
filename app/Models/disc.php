<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disc extends Model
{
    protected $fillable = [
        'album_id',
        'name'
    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function tracks()
    {
        return $this->hasMany(Track::class);
    }
}
