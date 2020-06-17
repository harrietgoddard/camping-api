<?php

namespace App;
use App\Campsite;

use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    public $timestamps = false;

    public function article()
    {
        return $this->belongsToMany(Campsite::class);
    }
}
