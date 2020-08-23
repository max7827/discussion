<?php

namespace App;

class Discussion extends Model
{


    public function author()
    {

        return   $this->belongsTo(User::class, 'user_id');
    }

    public function replies()
    {

        return $this->hasMany(Reply::class);
    }

    public function bestReply()
    {

        return $this->belongsTo(Reply::class, 'reply_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
