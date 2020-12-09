<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;


class ImageController extends Controller
{
    public function display () {
        return Image::inRandomOrder()->limit(9)->get();
    }

    public function select ($id) {
        return Image::findOrFail($id);
    }

    // public function store ($id) {
    //     echo('works');
    //     return ImageUser::create([
    //         'image_id' => request('image_id'),
    //         'user_id' => request('user_id'),
    //         'caption' => request('caption'),
    //     ]);
    // }

}