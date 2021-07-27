<?php

namespace App\Models;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded=['id'];

    public function subCategory()
    {
        return $this->hasMany(SubCategory::class,'category_id','id');
    }

    public function categorypost()
    {
        return $this->hasMany(Post::class,'category_id');
    }
}
