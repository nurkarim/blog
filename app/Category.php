<?php

namespace App;

use App\CustomClasses\SettingsHelper;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use LaravelLocalization;
class Category extends Model
{
    protected $guarded=['id'];

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class,'category_id')->where('language', LaravelLocalization::setLocale() ?? SettingsHelper::settingHelper('default_language'));
    }

    public function subCategoriesBody()
    {
        return $this->hasMany(SubCategory::class,'category_id')->where('language', LaravelLocalization::setLocale() ?? SettingsHelper::settingHelper('default_language'))->take(4);
    }

    public function post()
    {
        return $this->hasMany(Post::class,'category_id')->where('language', LaravelLocalization::setLocale() ?? SettingsHelper::settingHelper('default_language'))->where('post_type','article')->where('visibility',1)->latest()->take(6);
    }

    public function latest_single_post()
    {
        return $this->hasMany(Post::class,'category_id')->where('language', LaravelLocalization::setLocale() ?? SettingsHelper::settingHelper('default_language'))->where('post_type','article')->where('visibility',1)->latest()->take(1);
    }
}
