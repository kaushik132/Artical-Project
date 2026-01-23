<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PostLike;

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

public function postLikes()
{
    return $this->hasMany(PostLike::class, 'post_id');
}

public function isLikedByIp($ip)
{
    return $this->postLikes()
        ->where('ip_address', $ip)
        ->exists();
}


}
