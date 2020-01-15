<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $movie = $this->movie;

        $data =  parent::toArray($request);
        $data['movie_title'] = $movie->title;
        $data['movie'] = new MovieResource($movie);
        return $data;
    }
}
