<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
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
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'release' => $this->release->diffForHumans(),
            'date' => $this->date->diffForHumans(),
            'rating' => $this->rating,
            'price' => $this->price,
            'ticket' => $this->ticket,
            'country' => $this->country,
            'genre' => $this->genre,
            'photo' => $this->photo,
            'user' => $this->user->name,

        ];
    }
}
