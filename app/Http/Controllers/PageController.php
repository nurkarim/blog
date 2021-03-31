<?php

namespace App\Http\Controllers;

use App\CustomClasses\ReturnMessage;
use App\Models\Language;
use App\Models\Page;
use App\Rules\PreventDuplicateRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function index()
    {
        $data=Page::query()->latest()->paginate(20);
        return view("back.page.index",compact('data'));
    }

    public function create()
    {
        $languages=Language::query()->get(['name','code']);
        return view("back.page.create",compact('languages'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
        Validator::make($request->all(), [
            'title' => 'required|unique:pages|min:2|max:40',
            '_csrf_token'   =>['required',new PreventDuplicateRule()],
        ])->validate();
        $page =new Page();
        $page->title =$request->title;
        if($request->slug != null) :
            Validator::make($request->all(), [
                'slug' => 'required|min:2|unique:pages|max:30|regex:/^\S*$/u', ])->validate();
            $page->slug =$request->slug;
        else :
            $page->slug = $this->make_slug($request->title);
        endif;

        $page->description =$request->description;
        $page->template =$request->template;
        $page->visibility =$request->visibility;
        $page->language =$request->language;
        $page->show_for_register =$request->show_for_register;
        $page->show_title =$request->show_title;
        $page->show_breadcrumb =$request->show_breadcrumb;
        $page->meta_title =$request->meta_title;
        $page->meta_description =$request->meta_description;
        $page->meta_keywords =$request->meta_keywords;
        $page->image_id=$request->image_id;
        $page->page_type=$request->page_type;
        $page->save();
        DB::commit();
        return redirect()->back()->with('success', __('successfully_added'));

        }catch (\Exception $e){
            DB::rollBack();
            return  ReturnMessage::somethingWrong();
        }
    }

    private function make_slug($string) {
        return preg_replace('/\s+/u', '-', trim($string));
    }
    public function edit($id)
    {
        $languages=Language::query()->get(['name','code']);
        $page=Page::find($id);
        return view("back.page.edit",compact('languages','page'));
    }
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            Validator::make($request->all(), [
                'title' => 'required|min:2|max:40|unique:pages,title,' . $id,
            ])->validate();

            $page = Page::find($id);
            $page->title = $request->title;
            $page->language = $request->language;
            if ($request->slug != null) :
                Validator::make($request->all(), [
                    'slug' => 'required|min:2|max:30|regex:/^\S*$/u|unique:pages,slug,' . $id,
                ])->validate();
                $page->slug = $request->slug;
            else :
                $page->slug = $this->make_slug($request->title);
            endif;

            $page->description = $request->description;
            $page->template = $request->template;
            $page->visibility = $request->visibility;
            $page->show_for_register = $request->show_for_register;
            $page->show_title = $request->show_title;
            $page->show_breadcrumb = $request->show_breadcrumb;
            $page->meta_title = $request->meta_title;
            $page->meta_description = $request->meta_description;
            $page->meta_keywords = $request->meta_keywords;
            $page->image_id=$request->image_id;
            $page->page_type=$request->page_type;
            $page->save();
            DB::commit();
            return redirect()->back()->with('success', __('successfully_updated'));
        }catch (\Exception $e){
            DB::rollBack();
            return $e;
            return  ReturnMessage::somethingWrong();
        }
    }
}
