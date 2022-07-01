<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
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
            'id'             => $this->id,
            'firstname'      => $this->firstname,
            'lastname'       => $this->lastname,
            'company'        => $this->company,
            'phoneNumber'    => $this->phoneNumber,
            'pseudonym'      => $this->pseudonym,
            'email'          => $this->email,
            'role'           => $this->role,



            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}
