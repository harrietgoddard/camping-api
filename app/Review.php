<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function campsite()
    {
        return $this->belongsTo(Campsite::class);
    }
}
