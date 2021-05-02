<?php

namespace App\Http\Controllers;

use App\Category;
use App\CustomClasses\ReturnMessage;
use App\Models\Ads;
use App\Models\AdsLocation;
use App\ThemeSetting;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ThemeSettingController extends Controller
{
    public function index()
    {
        $data=ThemeSetting::query()->orderBy('view_order')->get();
        return view("back.themeSetting.index",compact('data'));
    }

    public function create()
    {
        $categories=Category::query()->where('status',1)->pluck('name','id');
        $ads=AdsLocation::query()->where('ad_end_date','>=',date('Y-m-d H:i:s'))->pluck('title','ad_id');
        return view("back.themeSetting.create",compact('categories','ads'));
    }

    public function edit($id)
    {
        $data=ThemeSetting::find($id);
        $categories=Category::query()->where('status',1)->pluck('name','id');
        $ads=AdsLocation::query()->where('ad_end_date','>=',date('Y-m-d H:i:s'))->pluck('title','ad_id');
        return view("back.themeSetting.edit",compact('categories','ads','data'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {

            $save               =new ThemeSetting();
            $save->type         =$request->type;
            $save->label        ="";
            if ($request->type==1){
                if ($request->label=='top'):
                Validator::make($request->all(), [
                    'category_id' => 'required|unique:theme_sections,',
                ])->validate();
                endif;
            }
            $save->category_id  =$request->category_id;
            if ($request->show_ads==1){
                Validator::make($request->all(), [
                    'ad_id' => 'required',
                ])->validate();
                $save->ad_id        =$request->ad_id;
            }
            $save->sub_category_id =$request->sub_category_id;
            $save->section_style =$request->section_style;
            $save->show_ads     =$request->show_ads;
            $save->view_order   =$request->view_order;
            $save->status       =$request->status;
            $save->label        =$request->label;
            $save->save();

            DB::commit();
            return ReturnMessage::insertSuccess();
        }catch (QueryException $e){
            DB::rollBack();
            return $e->getMessage();
            return ReturnMessage::somethingWrong();
        }
    }

    public function update($id,Request $request)
    {
        DB::beginTransaction();
        try {

            $save               =ThemeSetting::find($id);
            $save->type         =$request->type;
            $save->label        ="";
            if ($request->type==1){
                if ($request->label=='top'):
                Validator::make($request->all(), [
                    'category_id' => 'required|unique:theme_sections,category_id,'.$id,
                ])->validate();
                $save->category_id  =$request->category_id;
                else:
                    $save->category_id  =$request->category_id;
                endif;
            }
            if ($request->show_ads==1){
                Validator::make($request->all(), [
                    'ad_id' => 'required',
                ])->validate();
                $save->ad_id        =$request->ad_id;
            }
            $save->sub_category_id=$request->sub_category_id;
            $save->section_style=$request->section_style;
            $save->show_ads     =$request->show_ads;
            $save->view_order   =$request->view_order;
            $save->status       =$request->status;
            $save->label       =$request->label;
            $save->save();
            DB::commit();
            return ReturnMessage::updateSuccess();
        }catch (QueryException $e){
            DB::rollBack();
            return ReturnMessage::somethingWrong();
        }
    }

    public function destroy($id)
    {
        try {
            $save               =ThemeSetting::find($id);
            $save->delete();
            return ReturnMessage::deleteSuccess();
        }catch (QueryException $e){
            return ReturnMessage::somethingWrong();
        }
    }
}
