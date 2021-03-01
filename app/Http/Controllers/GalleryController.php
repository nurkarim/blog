<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('back.gallery.index');
    }

    public function fetchImage()
    {
        return view('back.gallery.fetch_image');
    }
}
