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
            'comments' => CommerntResource::collection($this->comments),
            'comments_count' => $this->comments->count(),
            'path' => $this->path,
            'description' => $this->description,
            'release' => $this->created_at->diffForHumans(),
            'date' => $this->created_at->diffForHumans(),
            'rating' => $this->rating,
            'price' => $this->price,
            'ticket' => $this->ticket,
            'country' => $this->country,
            'genre' => $this->genre,
            'photo' => $this->photo,
            'user_id' => $this->user_id,
            'user' => $this->user->name

        ];
    }
}
