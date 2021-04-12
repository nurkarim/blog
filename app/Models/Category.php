<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded=['id'];

    public function subCategory()
    {
        return $this->hasMany(SubCategory::class,'category_id','id');
    }
}
