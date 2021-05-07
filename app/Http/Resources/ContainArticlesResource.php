<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContainArticlesResource extends JsonResource
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
            'art_id' => $this->art_id,
            'amount_of' => $this->amount_of,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
