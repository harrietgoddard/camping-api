<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
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
            "campsite_id" => $this->campsite_id,
            "date-posted" => $this->created_at->format('j F Y H:i'),
            "username" => $this->username,
            "rating" => $this->rating,
            "review_description" => $this->review_description
        ];
    }
}
