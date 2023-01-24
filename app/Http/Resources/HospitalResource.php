<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HospitalStoreResource extends JsonResource
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
            'hospital_code' =>$this->hospital_code,
            'hospital_name' =>$this->hospital_name,
            'hospital_address' =>$this->hospital_address,
            'phone' =>$this->phone,
            'password' =>$this->password,

        ];
    }
}
