<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReservationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'first_name' =>$this->first_name,
            'address' =>$this->address,
            'phone' =>$this->phone,
            'chdoctor' =>$this->chdoctor,
            'chdates' =>$this->chdates,

        ];
    }
}
