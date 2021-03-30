<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data=Page::query()->latest()->paginate(20);
        return view("back.page.index",compact('data'));
    }

    public function create()
    {
        return view("back.page.create");
    }
}
