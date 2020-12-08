<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;


class ImageController extends Controller
{
    public function display () {
        return Image::inRandomOrder()->limit(9)->get();
    }

}