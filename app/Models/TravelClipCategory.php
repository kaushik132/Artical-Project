<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TravelClipCategory extends Model
{
    protected $table = 'travel_clip_category';

    public function travelclips()
    {
        return $this->hasMany(TravelClip::class, 'travel_clip_id');
    }
}
