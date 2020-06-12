<?php

namespace App\Http\Resources\Product;

use App\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductVariation extends JsonResource
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
            'name' => $this->name,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'product' => new ProductResource($this->product)
        ];
    }
}
