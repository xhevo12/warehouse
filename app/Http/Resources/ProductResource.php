<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'price' => $this->price,
            'prod_id' => $this->prod_id,
            'name' => $this->name,
            'contain_article' => $this->contain_article,
            // 'art_id' => new InventoryResource($this->article),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
