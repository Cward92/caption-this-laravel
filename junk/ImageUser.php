<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImageUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image_id', //the path you uploaded the image
        'caption',
        'rating'
    ];
}
