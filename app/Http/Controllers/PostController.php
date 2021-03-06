<?php

namespace App\Http\Controllers;

use App\Category;
use App\CustomClasses\ReturnMessage;
use App\CustomClasses\SettingsHelper;
use App\Http\Requests\PostRequest;
use App\Models\Language;
use App\Models\Tag;
use App\Post;
use App\Repositories\PostRepository;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use Illuminate\Support\Facades\App;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class PostController extends Controller
{

    // space that we can use the repository from
    protected $model;

    public function __construct(Post $post)
    {
        // set the model
        $this->model = new Repository($post);
    }

    public function index()
    {
        $data= $this->model->paginate(20);
        return view("back.post.index",compact('data'));
    }

    public function create()
    {
        $categories=Category::query()->where('language',App::getLocale())->pluck('name','id');
        $languages=Language::query()->pluck('name','code');
        return view('back.post.create',compact('categories','languages'));
    }

    public function store(PostRequest $request,PostRepository $postRepository)
    {
        try {
            $save=$postRepository->create($request);
            if ($save){
                return ReturnMessage::insertSuccess();
            }
            return ReturnMessage::somethingWrong();
        }catch (QueryException $e){
            return $e->getMessage();
            return ReturnMessage::somethingWrong();
        }
    }



    public function show($id)
    {
        return $this->model->show($id);
    }

    public function update(Request $request, $id)
    {
        $this->model->update($request->all(),$id);

    }

    public function destroy($id)
    {
        return $this->model->delete($id);
    }
}
