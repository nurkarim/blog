<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItems extends Model
{
    protected $guarded=['id'];
    protected $table="menu_items";

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
