<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'photo1_link',
        'photo2_link',
        'photo3_link',
        'description'
    ];
}
