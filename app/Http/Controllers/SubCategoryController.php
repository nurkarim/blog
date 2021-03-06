<?php

namespace App\Http\Controllers;

use App\Category;
use App\CustomClasses\ReturnMessage;
use App\Models\Language;
use App\Models\SubCategory;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
    public function index()
    {
        $categories=SubCategory::query()->paginate(10);
        return view('back.sub_category.index',compact('categories'));
    }

    public function create()
    {
        $languages=Language::query()->pluck('name','code');
        return view('back.sub_category.create',compact('languages'));
    }

    public function ajaxCategory(Request $request)
    {
        if ($request->ajax()):
            return Category::query()->where('language',$request->language)->get([
                'name',
                'id'
            ]);
        endif;
    }

    public function ajaxSubCategory(Request $request)
    {
        if ($request->ajax()):
            return SubCategory::query()->where('category_id',$request->category_id)->get([
                'name',
                'id'
            ]);
        endif;
    }

    public function edit($id)
    {
        $subCategory=SubCategory::find($id);
        $languages  =Language::query()->pluck('name','code');
        $categories =Category::query()->where('language',$subCategory->language)->pluck('name','id');
        return view('back.sub_category.edit',compact('languages','categories','subCategory'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            Validator::make($request->all(), [
                'name'          => 'required|unique:sub_categories|min:2|max:40',
                'slug'          => 'nullable|min:2|unique:sub_categories|max:30|regex:/^\S*$/u',
                'language'      => 'required',
                'category_id'   => 'required'
            ])->validate();

            $sub_category               = new SubCategory();
            $sub_category->name         = $request->name;
            $sub_category->language     = $request->language;
            $sub_category->category_id  = $request->category_id;

            if ($request->slug != null) :
                $sub_category->slug = $request->slug;
            else :
                $sub_category->slug = \Str::slug($request->get('name'), '-');
            endif;

            $sub_category->meta_description     = $request->meta_description;
            $sub_category->meta_keywords        = $request->meta_keywords;
            $sub_category->view_order           = $request->order;
            $sub_category->status               = $request->status;
            $sub_category->save();

            DB::commit();
            return redirect()->back()->with('success', __('successfully_added'));
        }catch (QueryException $e){
            DB::rollBack();
            return ReturnMessage::somethingWrong();
        }
    }

    public function update($id,Request $request)
    {
        DB::beginTransaction();
        try {
            Validator::make($request->all(), [
                'name'                  => 'required|min:2|max:40',
                'language'              => 'required',
                'slug'                  => 'nullable|min:2|max:30|regex:/^\S*$/u',
                'category_id'           => 'required'
            ])->validate();
            $subCategory=SubCategory::find($id);

            if (SubCategory::query()->where('id','!=',$subCategory->id)->where('slug',$request->slug)->exists()){
                return ReturnMessage::duplicate();
            }

            $subCategory->name         = $request->name;
            $subCategory->language     = $request->language;
            $subCategory->category_id  = $request->category_id;

            if ($request->slug != null) :
                $subCategory->slug = $request->slug;
            else :
                $subCategory->slug = \Str::slug($request->get('name'), '-');
            endif;

            $subCategory->meta_description     = $request->meta_description;
            $subCategory->meta_keywords        = $request->meta_keywords;
            $subCategory->view_order           = $request->order;
            $subCategory->status               = $request->status;
            $subCategory->save();

            DB::commit();
            return redirect()->route('subcategories.index')->with('success', __('unsuccessfully updated'));
        }catch (QueryException $e){
            DB::rollBack();
            return $e;
            return ReturnMessage::somethingWrong();
        }

    }

    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return ReturnMessage::deleteSuccess();
    }
}
