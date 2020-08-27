<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;

class  Model extends BaseModel


{

    //protected $gaurded = [''];

    protected $fillable = ['title', 'content', 'channel', 'user_id', 'slug', 'channel_id', 'discussion_id'];
}
