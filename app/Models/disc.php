<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disc extends Model
{
    protected $fillable = [
        'number',
        'album'
    ];
}
