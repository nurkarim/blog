<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    protected $guarded=['id'];
    protected $table='comments';

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function commentReply()
    {
        return $this->hasMany(PostCommentReply::class,'post_comment_id');
    }
}
