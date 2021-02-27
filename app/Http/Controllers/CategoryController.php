<?php

namespace App\Http\Controllers;

use App\Category;
use App\CustomClasses\ReturnMessage;
use App\Models\Language;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::query()->paginate(10);
        return view('back.category.index',compact('categories'));
    }

    public function create()
    {
        $languages=Language::query()->pluck('name','code');
        return view('back.category.create',compact('languages'));
    }

    public function edit(Category $category)
    {
        $languages=Language::query()->pluck('name','code');
        return view('back.category.edit',compact('languages','category'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            Validator::make($request->all(), [
                'name'          => 'required|unique:categories|min:2|max:40',
                'slug'          => 'nullable|min:2|unique:categories|max:30|regex:/^\S*$/u',
                'language'      => 'required'
            ])->validate();

            $category            = new Category();
            $category->name     = $request->name;
            $category->language = $request->language;
            if ($request->slug != null) :
                $category->slug = $request->slug;
            else :
                $category->slug = \Str::slug($request->get('name'), '-');
            endif;

            $category->meta_description     = $request->meta_description;
            $category->meta_keywords        = $request->meta_keywords;
            $category->view_order           = $request->order;
            $category->status               = $request->status;
            $category->save();
            DB::commit();
            return redirect()->back()->with('success', __('successfully_added'));
        }catch (QueryException $e){
            DB::rollBack();
            return ReturnMessage::somethingWrong();
        }
    }

    public function update(Category $category,Request $request)
    {
        DB::beginTransaction();
        try {
        Validator::make($request->all(), [
            'name'              => 'required|min:2|max:40|unique:categories,name,' . $category->id,
            'slug'              => 'nullable|min:2|max:30|regex:/^\S*$/u|unique:categories,slug,' . $category->id,
            'language'          => 'required'
        ])->validate();

        $category->name         = $request->name;
        $category->language     = $request->language;

        if ($request->slug != null) :
            $category->slug     = $request->slug;
        else :
            $category->slug     = \Str::slug($request->get('name'), '-');
        endif;

        $category->meta_description = $request->meta_description;
        $category->meta_keywords    = $request->meta_keywords;
        $category->view_order       = $request->order;
        $category->status           = $request->status;
        $category->save();

            DB::commit();
            return redirect()->route('categories.index')->with('success', __('unsuccessfully updated'));
        }catch (QueryException $e){
            DB::rollBack();
            return ReturnMessage::somethingWrong();
        }

    }

    public function destroy(Category $category)
    {
            if ($category->subCategories->count()>0){
                return ReturnMessage::customMessage('error','sorry! Category already use in subcategories');
            }
            $category->delete();
            return ReturnMessage::deleteSuccess();
    }
}
