<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class CampsitesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return [
            "id" => $this->id,
            "region_id" => $this->region_id,
            "campsite_name" => $this->campsite_name,
            "price" => $this->formatPrice(),
            "amenities" => $this->amenities->pluck("amenity_name"),
            "description" => $this->description,
            "address" => $this->address,
            "town_city" => $this->town_city,
            "postcode" => $this->postcode,
            "rating" => +$this->rating,
            "contact_no" => $this->contact_no,
            "contact_email" => $this->contact_email,
            "img" => $this->img,
            "latitude" => +$this->latitude,
            "longitude" => +$this->longitude
        ];
    }
}
