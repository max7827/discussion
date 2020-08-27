<?php

namespace App;

class channel extends Model
{
    public function getNameAttribute($a)
    {
        return ucwords($a);
    }
}
