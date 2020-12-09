<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageUser;


class ImageUserController extends Controller
{
    public function store ($id) {
        echo('works');
        return ImageUser::create([
            'image_id' => request('image_id'),
            'user_id' => request('user_id'),
            'caption' => request('caption'),
        ]);
    }

}