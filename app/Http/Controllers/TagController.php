<?php

namespace App\Http\Controllers;

use App\CustomClasses\ReturnMessage;
use App\Models\Language;
use App\Models\Tag;
use App\Repositories\Repository;
use App\Repositories\TagRepository;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TagController extends Controller
{
    public function index()
    {
        $data=Tag::query()->paginate(50);
        return view('back.tag.index',compact('data'));
    }

    public function create()
    {
        $lang=Language::query()->pluck('name','code');
        return view('back.tag.create',compact('lang'));
    }

    public function store(Request $request,TagRepository $tagRepository)
    {
        try {
            Validator::make($request->all(), [
                'title' => 'required|string',
                'language' => 'required|string',
                'slug' => 'required|string|unique:tags',
            ])->validate();
            $tagRepository->create($request);
        }catch (QueryException $e){
            return ReturnMessage::somethingWrong();
        }
    }
}
