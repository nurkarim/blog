<?php

namespace App;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded=['id'];

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class,'category_id');
    }
}
