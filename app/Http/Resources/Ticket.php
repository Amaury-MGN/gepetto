<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ticket extends JsonResource
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
            'id'                    => $this->id,
            'user_id'               => $this->user_id,
            'ticketNumber'          => $this->ticketNumber,
            'category'              => $this->category,
            'closed'                => $this->closed,
            'userTicket'            => $this->userTicket,
            'gepettoResponse'       => $this->gepettoResponse,
            'checkGepettoResponse'  =>$this->checkGepettoResponse,

            'created_at'       => $this->created_at->format('d/m/Y'),
            'updated_at'       => $this->updated_at->format('d/m/Y'),
        ];
    }
}
