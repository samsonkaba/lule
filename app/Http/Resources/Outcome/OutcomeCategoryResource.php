<?php

namespace App\Http\Resources\Outcome;

use Illuminate\Http\Resources\Json\JsonResource;

class OutcomeCategoryResource extends JsonResource
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
          'Project Name' =>$this->name,
          'Project Description' =>$this->description

        ];
    }
}
