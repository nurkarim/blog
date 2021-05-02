<?php

namespace App\Models;

use App\CustomClasses\SettingsHelper;
use App\Post;
use Illuminate\Database\Eloquent\Model;
use LaravelLocalization;
class SubCategory extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function post()
    {
        return $this->hasMany(Post::class,'sub_category_id')->where('language', LaravelLocalization::setLocale() ?? SettingsHelper::settingHelper('default_language'))->where('post_type','article')->where('visibility',1)->latest()->take(6);
    }

}
