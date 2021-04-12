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

    public function edit()
    {
        return view("back.themeSetting.edit");
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {

            $save               =new ThemeSetting();
            $save->type         =$request->type;
            $save->label        ="";
            if ($request->type==1){
                Validator::make($request->all(), [
                    'category_id' => 'required|unique:theme_sections',
                ])->validate();
                $save->category_id  =$request->category_id;
            }
            if ($request->show_ads==1){
                Validator::make($request->all(), [
                    'ad_id' => 'required',
                ])->validate();
                $save->ad_id        =$request->ad_id;
            }
            $save->section_style=$request->section_style;
            $save->show_ads     =$request->show_ads;
            $save->view_order   =$request->view_order;
            $save->status       =$request->status;
            $save->save();
            DB::commit();
            return ReturnMessage::insertSuccess();
        }catch (QueryException $e){
            DB::rollBack();
            return $e->getMessage();
            return ReturnMessage::somethingWrong();
        }
    }
}
