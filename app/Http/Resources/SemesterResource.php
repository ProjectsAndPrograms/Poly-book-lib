<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SemesterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'sub_title' => $this->sub_title,
            'image' => $this->getFullImageUrl($this->image),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
         ];
    }

    private function getFullImageUrl()
    {
        return url('storage/' . $this->image);
    }
}
