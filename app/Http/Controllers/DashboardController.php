<?php

namespace App\Http\Controllers;

use App\Http\Resources\DashboardResource;
use App\Models\Vote;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $total_A = Vote::where('vote_choice', 'A')->count();
        $total_B = Vote::where('vote_choice', 'B')->count();
        $total_C = Vote::where('vote_choice', 'C')->count();
        $total_D = Vote::where('vote_choice', 'D')->count();
        $total_E = Vote::where('vote_choice', 'E')->count();

        return DashboardResource::make((object) [
            'total_A' => $total_A,
            'total_B' => $total_B,
            'total_C' => $total_C,
            'total_D' => $total_D,
            'total_E' => $total_E,
        ])->message('Data dashboard berhasil diambil');
    }
}
