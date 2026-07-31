<?php

namespace App\Http\Controllers;

use App\Http\Requests\Vote\TokenCheckRequest;
use App\Http\Resources\VoterCodeResource;
use App\Models\VoterCode;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function token(TokenCheckRequest $request)
    {
        $validated = $request->validated();

        $voterCode = VoterCode::where('code', $validated['code'])->first();

        if (!$voterCode) {
            abort(400, 'Kode salah');
        }

        if ($voterCode->already_vote) {
            abort(400, 'Kode sudah digunakan.');
        }

        return new VoterCodeResource($voterCode);
    }
}
