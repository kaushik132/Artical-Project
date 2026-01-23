<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TravelClip extends Model
{
    protected $table = 'travel_clip';

    public function travelclipcategory()
    {
        return $this->belongsTo(TravelClipCategory::class, 'travel_clip_id');
    }
}
