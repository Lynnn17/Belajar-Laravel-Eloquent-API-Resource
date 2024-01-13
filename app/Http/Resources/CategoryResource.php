<?php

namespace App\Http\Resources;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Category
 */

// ini nanti akan dimixin dengan model Category jadi bisa mengakses apapun dengan this
class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //resource model object category
        // this disini memanggil modelnya -> memanggil kolomnya
        return [
            'id' => $this->id,
            'name'=> $this->name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];

    }
}
