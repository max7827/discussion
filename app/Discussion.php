<?php

namespace App;

use App\Model;


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

    public function getTitleAttribute($a)
    {
        return ucwords(strtolower($a));
    }
    public function setTitleAttribute($a)
    {
        $this->attribute['title'] =  ucwords($a);
    }
}
