<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRoll extends Model
{

    protected $table="role_user";
    protected $fillable = [
        'user_id',
        'role_id',
    ];
}
