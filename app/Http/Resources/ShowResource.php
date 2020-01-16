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

        if($include = $request->query('include')){
            $theaterStudions = $this->theaterStudios;
            // dd($theaterStudions);
            switch ($include) {
                case 'theaters':
                    $data['theaters'] = TheaterResource::collection($theaterStudions->groupBy('theater_id')->map(function($theaterStudio){
                        return $theaterStudio->first()->theater;
                    }));
                    break;
                case 'show_times':
                    $data['show_times'] = ShowTimeResource::collection($theaterStudions);
                
                default:
                    # code...
                    break;
            }
        }
        return $data;
    }
}
