<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticalCategory extends Model
{
    protected $table = 'artical_category';

    public function articals()
    {
        return $this->hasMany(Artical::class, 'artical_category_id', 'id');
    }
}
