<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CastResource;

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
            'id' => $this->id,
            'rating' => $this->rating,
            'release_date' => $this->release_date,
            'duration' => convertToHoursMins($this->duration, '%02d hours %02d minutes'),
            'director' => $this->director,
            'synopsis' => $this->synopsis,
            'casts' => CastResource::collection($this->casts)
        ];
    }
}
