<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hashtag extends Model
{
    protected $table = 'hashtags';

    public function postss()
    {
        return $this->hasMany(Post::class, 'hashtags_id');
    }

}
