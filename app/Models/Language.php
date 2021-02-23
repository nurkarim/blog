<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $guarded=['id'];
    protected $table="languages";

    public function languageConfig()
    {
        return $this->hasOne(LanguageConfig::class,'language_id');
    }
}
