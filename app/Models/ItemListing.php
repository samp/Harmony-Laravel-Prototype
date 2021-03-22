<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemListing extends Model
{
    protected $fillable = [
        'name',
        'keywords',
        'price'
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
