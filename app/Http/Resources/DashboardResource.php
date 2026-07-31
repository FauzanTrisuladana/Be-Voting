<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;

class DashboardResource extends ApiResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'total_A' => $this->total_A,
            'total_B' => $this->total_B,
            'total_C' => $this->total_C,
            'total_D' => $this->total_D,
            'total_E' => $this->total_E,
        ];
    }
}
