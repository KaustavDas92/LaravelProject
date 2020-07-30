<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    //protected $fillable=['Title','excerpt','body'];
    protected $guarded=[];
    function path()
    {
        return route('articles.show',$this);
    }
    function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
