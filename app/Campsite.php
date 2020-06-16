<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campsite extends Model
{

    protected $fillable = ["region_id", "campsite_name", "price", "description", "address", "town_city", "postcode", "amenities", "rating", "contact_no", "contact_email", "img"];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function formatAmenities()
    {
        return explode(", ", $this->amenities);
    }

    public function formatPrice()
    {
        return "£" . number_format($this->price, 2, '.', '');
    }
}
