<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'ingredients', 'persons', 'time', 'category', 'image'
    ];
    
    protected $casts = [
        'time' => 'datetime:H:i:s',
    ];
}
