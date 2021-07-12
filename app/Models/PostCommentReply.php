<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class PostCommentReply extends Model
{
    protected $guarded=['id'];
    protected $table='post_comment_reply';
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
