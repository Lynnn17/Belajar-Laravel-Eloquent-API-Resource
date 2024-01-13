<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CategoryCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            //secara default data => $this->collection akan menampilkan seluruh data jadi jika ingin menampilkan
            //data tertentu bisa menggunakan cara dibawah ini
            "data" => CategorySimpleResource::collection($this->collection),
            "total" => count($this->collection)
        ];
    }
}
