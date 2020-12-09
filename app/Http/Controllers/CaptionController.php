<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caption;


class CaptionController extends Controller
{
    public function display ($id) {
        return Caption::where('image_id', $id)->with(['user'])->get();
    }

    public function store () {
        // return $request;
        Caption::create([
            'image_id' => request('image_id'),
            'user_id' => request('user_id'),
            'text' => request('text'),
        ]);
        return $this->display(request('image_id'));
    }
}
