<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Amenity;

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

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class);
    }

    public function formatAmenities()
    {
        return explode(", ", $this->amenities);
    }

    public function formatPrice()
    {
        return "£" . number_format($this->price, 2, '.', '');
    }

    public function addAmenities(array $number) : Campsite
    {
        $amenities = Amenity::find($number);

        $this->amenities()->sync($amenities->pluck('id'));

        return $this;
    }
}
