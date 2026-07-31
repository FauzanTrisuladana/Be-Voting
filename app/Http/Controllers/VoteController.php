<?php

namespace App\Http\Controllers;

use App\Http\Requests\Vote\TokenCheckRequest;
use App\Http\Requests\Vote\VoteRequest;
use App\Http\Resources\VoterCodeResource;
use App\Models\VoterCode;

class VoteController extends Controller
{
    public function token(TokenCheckRequest $request)
    {
        $validated = $request->validated();

        $voterCode = VoterCode::where('code', $validated['code'])->first();

        if (! $voterCode) {
            abort(400, 'Kode salah');
        }

        if ($voterCode->already_vote) {
            abort(400, 'Kode sudah digunakan.');
        }

        return (new VoterCodeResource($voterCode))->message('Kode valid');
    }

    public function vote(VoteRequest $request)
    {
        $validated = $request->validated();

        $voterCode = VoterCode::where('code', $validated['voter_code'])->first();

        if (! $voterCode) {
            abort(400, 'Kode salah');
        }

        if ($voterCode->already_vote) {
            abort(400, 'Kode sudah digunakan.');
        }

        $voterCode->votes()->create([
            'voter_code_id' => $voterCode->id,
            'vote_choice' => $validated['vote_choice'],
        ]);

        $voterCode->already_vote = true;
        $voterCode->save();

        return (new VoterCodeResource($voterCode->load('votes')))->message('Berhasil melakukan voting');
    }
}
