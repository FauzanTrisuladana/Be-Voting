<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;

class VoterCodeResource extends ApiResource
{
    protected ?string $message = 'Kode valid';

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'code' => $this->code,
            'already_vote' => $this->already_vote,
        ];
    }
}
