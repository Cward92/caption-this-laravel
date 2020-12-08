<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

   protected $fillable = [
    'title',
    'src', //the path you uploaded the image
    'mime_type',
    'description',
    'alt'
  ];
}

