<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function user()
    {
        return $this->belongsto(user::class);
    }

    public function replies()
    {
        return $this->hasmany(reply::class);
    }

    public function category()
    {
        return $this->belongsto(category::class);
    }
}


