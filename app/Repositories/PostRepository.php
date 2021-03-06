<?php
namespace App\Repositories;

use App\Models\Tag;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class PostRepository{

    public function create($request)
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
        $post->content      = $request->content;

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
//            if($request->video_url_type != null){
//                Validator::make($request->all(), [
//                    'video_thumbnail_id' => 'required'
//                ])->validate();
//            }
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
        return true;
        }catch (QueryException $e){
            DB::rollBack();
            return $e;
            return false;
        }
    }

    private function make_slug($string) {
        return preg_replace('/\s+/u', '-', trim($string));
    }
}

