<?php

namespace App\Http\Controllers;

use App\Category;
use App\CustomClasses\ReturnMessage;
use App\CustomClasses\SettingsHelper;
use App\Http\Requests\PostRequest;
use App\Models\Language;
use App\Models\PostComment;
use App\Models\SubCategory;
use App\Models\Tag;
use App\Post;
use App\Repositories\PostRepository;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use Illuminate\Support\Facades\App;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Validator;
class PostController extends Controller
{

    protected $model;

    public function __construct(Post $post)
    {
        $this->model = new Repository($post);  // set the model
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

    public function edit($id)
    {
        $data=Post::find($id);
        $categories=Category::query()->where('language',App::getLocale())->pluck('name','id');
        $languages=Language::query()->pluck('name','code');
        $subcategories=SubCategory::query()->where('category_id',$data->category_id)->pluck('name','id');
        return view('back.post.edit',compact('categories','languages','data','subcategories'));
    }

    public function store(PostRequest $request,PostRepository $postRepository)
    {
        try {
            if($request->type == 'video'):
                if($request->video_url_type != null):
                    Validator::make($request->all(), [
                        'video_thumbnail_id' => 'required'
                    ])->validate();
                endif;
            endif;

            $save=$postRepository->create($request);

            if ($save){
                return ReturnMessage::insertSuccess();
            }
            return ReturnMessage::somethingWrong();
        }catch (QueryException $e){
            return ReturnMessage::somethingWrong();
        }
    }



    public function show($id)
    {
        return $this->model->show($id);
    }

    public function update(Request $request, $id,PostRepository $repository)
    {
        try {
        Validator::make($request->all(), [
            'title'             => 'required|min:2',
            'content'           => 'required',
            'language'          => 'required',
            'category_id'       => 'required',
            'slug'              => 'nullable|min:2|max:120|regex:/^\S*$/u|unique:posts,slug,' . $id,
            'sub_category_id'   => 'required'
        ])->validate();
            if($request->type == 'video'):
            if($request->video_url_type != null):
                Validator::make($request->all(), [
                    'video_thumbnail_id' => 'required'
                ])->validate();
            endif;
            endif;
        if ($repository->update($request,$id)):
            return ReturnMessage::updateSuccess();
            endif;
            return ReturnMessage::somethingWrong();
        }catch (QueryException $e){
            return ReturnMessage::somethingWrong();
        }
    }

    public function destroy($id)
    {
        try {
            PostComment::query()->where('post_id', $id)->delete();
            $this->model->delete($id);
            return ReturnMessage::deleteSuccess();
        }catch (QueryException $e){
            return ReturnMessage::somethingWrong();
        }
    }

    public function videoPostCreate()
    {
        $categories=Category::query()->where('language',App::getLocale())->pluck('name','id');
        $languages=Language::query()->pluck('name','code');
        return view('back.post.video_post',compact('categories','languages'));
    }
}
