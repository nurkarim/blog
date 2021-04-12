<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThemeSetting extends Model
{
    protected $table="theme_sections";
    protected $guarded=['id'];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
