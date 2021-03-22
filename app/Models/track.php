<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $fillable = [
        'name',
        'length',
        'disc_id'
    ];


    public function disc()
    {
        return $this->belongsTo(Disc::class);
    }
}
