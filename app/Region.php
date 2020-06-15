<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function campsites()
    {
        return $this->hasMany(Campsite::class);
    }
}
