<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caption;


class CaptionController extends Controller
{
    public function store (Request $request) {
        // return $request;
        return Caption::create([
            'image_id' => request('image_id'),
            'user_id' => request('user_id'),
            'caption' => request('caption'),
        ]);
    }
}
