<?php

namespace App;

use App\Models\Ads;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;

class ThemeSetting extends Model
{
    protected $table="theme_sections";
    protected $guarded=['id'];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function ads()
    {
        return $this->belongsTo(Ads::class,'ad_id');
    }

    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class,'sub_category_id','id');
    }



}
