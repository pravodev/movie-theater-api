<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShowTheaterStudioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $data =  array_merge(parent::toArray($request), [
            'studio_name' => $this->studio->name,
            'theater_name' => $this->theater->name
        ]);
        return $data;
    }
}
