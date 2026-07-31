<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoterCode extends Model
{
    protected $fillable = ['code', 'already_vote'];

    public function votes()
    {
        return $this->hasOne(Vote::class);
    }
}
