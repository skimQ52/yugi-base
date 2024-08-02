<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'name',
        'type',
        'frame_type',
        'desc',
        'atk',
        'def',
        'level',
        'race',
        'attribute',
        'archetype',
        'quantity',
    ];
}
