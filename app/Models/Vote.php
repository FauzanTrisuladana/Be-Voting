<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = ['voter_code_id', 'vote_choice'];

    public function voterCode()
    {
        return $this->belongsTo(VoterCode::class);
    }
}