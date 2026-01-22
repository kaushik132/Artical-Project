<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artical extends Model
{
    protected $table = 'artical';

    public function articalcategory()
    {
        return $this->belongsTo(ArticalCategory::class, 'artical_category_id', 'id');
    }
}
