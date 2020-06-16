<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ["region_name"];
    
    public function campsites()
    {
        return $this->hasMany(Campsite::class);
    }
}
