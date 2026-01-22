<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $table = 'post_category';

    public function posts()
    {
        return $this->hasMany(Post::class, 'post_category_id');
    }
}
