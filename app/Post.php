<?php

namespace App;

use App\Models\GalleryImage;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded=['id'];
    protected  $table='posts';

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function languageName()
    {
        return $this->belongsTo(Language::class,'language','code');
    }

    public function imageGallery()
    {
        return $this->belongsTo(GalleryImage::class,'image_id');
    }
}
