<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;

class VoteResource extends ApiResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->whenHas('id'),
        ];
    }
}
