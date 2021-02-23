<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\FlagIcon;
use Illuminate\Support\Facades\Validator;
use App\Models\LanguageConfig;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
class LanguageController extends Controller
{
    public function index()
    {
        $languages      = Language::orderBy('name', 'ASC')->paginate(20);
        return view('back.language.index',compact('languages'));
    }

    public function create()
    {
        $flagIcons      = FlagIcon::query()->pluck('title','icon_class');
        return view('back.language.create',compact('flagIcons'));
    }

    public function edit($id)
    {
        $flagIcons      = FlagIcon::query()->pluck('title','icon_class');
        $langInfo       = Language::find($id);
        return view('back.language.edit',compact('flagIcons','langInfo'));
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name'              => 'required',
            'status'            => 'required',
            'icon_class'        => 'required',
            'text_direction'    => 'required',
            'code'              => 'required|min:1|max:5|unique:languages'
        ])->validate();
        ini_set('max_execution_time', 600); //600 seconds

        // add new language name by object
        $langObj                    = new Language();
        $langObj->name              = $request->name;
        $langObj->code              = $request->code;
        $langObj->icon_class        = $request->icon_class;
        $langObj->text_direction    = $request->text_direction;
        $langObj->status            = $request->status;
        $langObj->save();

        // add new language configuration name by object
        $langConfigObj                  = new LanguageConfig();
        $langConfigObj->language_id     = $langObj->id;
        $langConfigObj->name            = $request->name;
        $langConfigObj->script          = $request->script;
        $langConfigObj->native          = $request->native;
        $langConfigObj->regional        = $request->regional;
        $langConfigObj->save();


        $path                   = base_path('resources/lang/' . $request->code);

        //make file if not exist
        if (!File::isDirectory($path)) :

            File::makeDirectory($path, 0777, true, true);
            File::copyDirectory(base_path('resources/lang/en'), base_path('resources/lang/' . $request->code));

            // Write File
            $newJsonString = file_get_contents(base_path('resources/lang/phrase.json'));
            file_put_contents(base_path('resources/lang/' . $request->code . '.json'), stripslashes($newJsonString));

            //translations save to database
//            Artisan::call('translations:reset');
//            Artisan::call('translations:import');

        endif;
        return redirect()->back()->with('success', 'Add success');
    }


    public function update(Language $language,Request $request)
    {
        Validator::make($request->all(), [
            'name'              => 'required',
            'status'            => 'required',
            'text_direction'    => 'required',
            'icon_class'        => 'required',
            'code'              => 'required|min:2|max:5'
        ])->validate();

        ini_set('max_execution_time', 600); //600 seconds


        $language->name      = $request->name;
        //if language code change
        if ($language->code != $request->code):
            // if 'not match';
            $oldFilePath        = base_path('resources/lang/' . $language->code . '.json');
            $newFilePath        = base_path('resources/lang/' . $request->code . '.json');
            $oldFolderPath      = base_path('resources/lang/' . $language->code);
            $newFolderPath      = base_path('resources/lang/' . $request->code);

            // rename file name
            if (!empty($oldFilePath)) :
                File::move($oldFilePath, $newFilePath);
            endif;
            //rename or make directory name
            if (File::isDirectory($oldFolderPath)) :
                File::move($oldFolderPath, $newFolderPath);
            else:
                File::makeDirectory($newFolderPath, 0777, true, true);
                File::copyDirectory(base_path('resources/lang/en'), $newFolderPath);
            endif;

            $language->code = $request->code;

//            Artisan::call('translations:reset');
//            Artisan::call('translations:import');

        endif;

        $language->icon_class        = $request->icon_class;
        $language->text_direction    = $request->text_direction;
        $language->status            = $request->status;
        $language->save();

        $language->languageConfig->language_id     = $language->id;
        $language->languageConfig->name            = $request->name;
        $language->languageConfig->script          = $request->script;
        $language->languageConfig->native          = $request->native;
        $language->languageConfig->regional        = $request->regional;
        $language->languageConfig->save();

        return redirect()->route('languages.index')->with('success', __('successfully updated'));
    }

}
