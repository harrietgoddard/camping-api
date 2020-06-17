<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class RegionResource extends JsonResource
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
            "campsite_name" => $this->campsite_name,
            "price" => $this->formatPrice(),
            "town_city" => $this->town_city,
            "rating" => +$this->rating,
            "img" => $this->img
        ];
    }
}
