<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    protected $casts = [
        'hashtags_id' => 'array',
    ];


    public function postcategory()
    {
        return $this->belongsTo(PostCategory::class, 'post_category_id');
    }


    public function hashtags()
    {
        return $this->belongsToMany(
            Hashtag::class,
            'hashtags_id',   // pivot table
            'post_id',       // FK
            'hashtag_id'     // related FK
        );
    }
}
