<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded=['id'];
    public function image(){
        return $this->belongsTo(GalleryImage::class,'image_id');
    }

}
