<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campsite extends Model
{
    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function formatAmenities()
    {
        return explode(", ", $this->amenities);
    }
}
