<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    function article()
    {
        return $this->belongsToMany(Article::class);
    }
}
