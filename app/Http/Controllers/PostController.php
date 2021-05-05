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
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $data= Post::query()->where('post_type','article')->paginate(20);
        return view("back.post.index",compact('data'));
    }

    public function allVideoPost()
    {
        $data= Post::query()->where('post_type','video')->paginate(20);
        return view("back.post.all_video_post",compact('data'));
    }

    public function draftPost()
    {
        $data= Post::query()->where('status',0)->paginate(20);
        return view("back.post.all_draft_post",compact('data'));
    }

    public function schedulePost()
    {
        $data= Post::query()->where('status',2)->paginate(20);
        return view("back.post.all_schedule_post",compact('data'));
    }

    public function pendingPost()
    {
        $data= Post::query()->where('post_type','article')->where('visibility',0)->paginate(20);
        return view("back.post.pending_video_post",compact('data'));
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

    public function videoPostEdit($id)
    {
        $data=Post::find($id);
        $categories=Category::query()->where('language',App::getLocale())->pluck('name','id');
        $languages=Language::query()->pluck('name','code');
        $subcategories=SubCategory::query()->where('category_id',$data->category_id)->pluck('name','id');
        return view('back.post.edit_video_post',compact('categories','languages','data','subcategories'));
    }

    public function store(PostRequest $request,PostRepository $postRepository)
    {

        DB::beginTransaction();
        try {

            $type=$request->type;
            $post               =   new Post();
            $post->title        =   $request->title;
            if ($request->slug != null) :
                $post->slug     = $request->slug;
            else :
                $post->slug     = $this->make_slug($request->title);
            endif;

            $post->user_id      = Auth::user()->id;
            $post->content      = $request->details;
            $post->sub_content      = $request->sub_content;

            $post->visibility   = $request->visibility;


            if(isset($request->featured)):
                $post->featured = 1;
            else :
                $post->featured = 0;
            endif;

            if(isset($request->breaking)):
                $post->breaking = 1;
            else :
                $post->breaking = 0;
            endif;

            if(isset($request->slider)):
                $post->slider   = 1;
            else :
                $post->slider   = 0;
            endif;

            if(isset($request->recommended)):
                $post->recommended  = 1;
            else :
                $post->recommended  = 0;
            endif;

            if(isset($request->auth_required)):
                $post->auth_required  = 1;
            else :
                $post->auth_required  = 0;
            endif;

            if(!empty($request->tags)):
//            foreach ($request->tags as $tag){
//                Tag::create([
//                'language'=>$request->language,
//                'title'=>$tag,
//            ]);
//            }
            endif;

            $post->meta_title       = $request->meta_title;
            $post->meta_keywords    = $request->meta_keywords;
            $post->tag_id           = json_encode($request->tags);
            $post->meta_description = $request->meta_description;
            $post->language         = $request->language;
            $post->category_id      = $request->category_id;
            $post->sub_category_id  = $request->sub_category_id;
            $post->image_id         = $request->image_id;
            $post->post_type        = $type;
            if($type == 'video'):
            if($request->video_url_type != null){
                Validator::make($request->all(), [
                    'video_thumbnail_id' => 'required'
                ])->validate();
            }
                $post->post_type            = 'video';
                $post->video_id             = $request->video_id;
                $post->video_url_type       = $request->video_url_type;
                $post->video_url            = $request->video_url;
                $post->video_thumbnail_id   = $request->video_thumbnail_id;
            endif;

            if($request->status == 2) :
                $post->status           = 0;
                $post->scheduled        = 1;
                $post->scheduled_date   = Carbon::parse($request->scheduled_date);
            else :
                $post->status           = $request->status;
            endif;

            if(isset($request->scheduled)):
                $post->scheduled=1;
            endif;

            $post->save();
            DB::commit();
            return ReturnMessage::insertSuccess();
        }catch (QueryException $e){
            DB::rollBack();
            return ReturnMessage::somethingWrong();
        }

    }

    private function make_slug($string) {
        return preg_replace('/\s+/u', '-', trim($string));
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
