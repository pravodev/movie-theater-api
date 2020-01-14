<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TheaterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $data =  parent::toArray($request);
        $include = request()->query('include');

        switch ($include) {
            case 'studios':
                $data['studios'] = $this->studios;
                break;
            
            default:
                # code...
                break;
        }

        return $data;
    }
}
