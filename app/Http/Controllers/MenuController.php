<?php

namespace App\Http\Controllers;

use App\Category;
use App\CustomClasses\ReturnMessage;
use App\Models\MenuItems;
use App\Page;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    public function index()
    {
        $menuItems = MenuItems::orderBy('view_order', 'asc')->get();
        return view("back.menu.index",compact('menuItems'));
    }

    public function create()
    {
        $categories=Category::query()->where('status',1)->pluck('name','id');
        $pages=Page::query()->where('status',1)->pluck('title','id');
        return view("back.menu.create",compact('categories','pages'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            Validator::make($request->all(), [
                'source'    => 'required',
            ])->validate();
            if ($request->source == 'page') :
                $page                   =Page::find($request->page_id);
                $menuItem               = new MenuItems();
                $menuItem->title        = $page->title;
                $menuItem->language     = $request->language ?? app()->getLocale();
                $menuItem->source       = $request->source;
                $menuItem->page_id      = $request->page_id;
                $menuItem->status       = $request->status;
                $menuItem->view_order   = $request->view_order;
                $menuItem->is_dropdown  = $request->is_dropdown;
                $menuItem->new_tab      = $request->new_tab;
                $menuItem->url          = $page->slug;
                $menuItem->save();
            elseif ($request->source == 'category') :
                $category               = Category::find($request->category_id);

                $menuItem               = new MenuItems();
                $menuItem->title        = $category->name;
                $menuItem->language     = $request->language ?? app()->getLocale();
                $menuItem->source       = $request->source;
                $menuItem->category_id  = $request->category_id;
                $menuItem->view_order   = $request->view_order;
                $menuItem->is_dropdown  = $request->is_dropdown;
                $menuItem->new_tab      = $request->new_tab;
                $menuItem->url          = $category->slug;
                $menuItem->status       = 1;
                $menuItem->save();
            endif;
            DB::commit();
            return ReturnMessage::insertSuccess();
        }catch (QueryException $e){
            DB::rollBack();
            return  ReturnMessage::somethingWrong();
        }
    }

    public function edit($id)
    {
        $menu=MenuItems::find($id);
        $categories=Category::query()->where('status',1)->pluck('name','id');
        $pages=Page::query()->where('status',1)->pluck('title','id');
        return view("back.menu.edit",compact('categories','pages','menu'));
    }

    public function update($id,Request $request)
    {
        DB::beginTransaction();
        try {
            Validator::make($request->all(), [
                'source'    => 'required',
            ])->validate();
            if ($request->source == 'page') :
                $page                   =Page::find($request->page_id);
                $menuItem               = MenuItems::find($id);
                $menuItem->title        = $page->title;
                $menuItem->language     = $request->language ?? app()->getLocale();
                $menuItem->source       = $request->source;
                $menuItem->page_id      = $request->page_id;
                $menuItem->status       = $request->status;
                $menuItem->view_order   = $request->view_order;
                $menuItem->is_dropdown  = $request->is_dropdown;
                $menuItem->new_tab      = $request->new_tab;
                $menuItem->url          = $page->slug;
                $menuItem->save();
            elseif ($request->source == 'category') :
                $category               = Category::find($request->category_id);

                $menuItem               = MenuItems::find($id);
                $menuItem->title        = $category->name;
                $menuItem->language     = $request->language ?? app()->getLocale();
                $menuItem->source       = $request->source;
                $menuItem->category_id  = $request->category_id;
                $menuItem->view_order   = $request->view_order;
                $menuItem->is_dropdown  = $request->is_dropdown;
                $menuItem->new_tab      = $request->new_tab;
                $menuItem->url          = $category->slug;
                $menuItem->status       = 1;
                $menuItem->save();
            endif;
            DB::commit();
            return ReturnMessage::updateSuccess();
        }catch (QueryException $e){
            DB::rollBack();
            return  ReturnMessage::somethingWrong();
        }
    }

    public function destroy($id)
    {
        $menuItem               = MenuItems::find($id);
        $menuItem->delete();
        return ReturnMessage::deleteSuccess();
    }
}
