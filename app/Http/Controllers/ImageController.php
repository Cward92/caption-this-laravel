<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;


class ImageController extends Controller
{
    public function display () {
        return Image::all()->random(10);
    }

    public function recycle () {
        $images = Image::all();
        $images->delete();
    }
}