<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketReservation;
use App\Http\Resources\TicketReservationResource;

class TicketReservationController extends ApiController
{
    protected $model = TicketReservation::class;
    protected $resource = TicketReservationResource::class;

    public function rules()
    {
        return [
            'show_id' => 'required',
            'show_time_id' => 'required',
            'theater_id' => 'required',
            'persons' => 'required'
        ];
    }
}
