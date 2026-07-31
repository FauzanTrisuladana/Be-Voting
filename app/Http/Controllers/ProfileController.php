<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Api untuk mengambil profile user yang sedang login.
     * Get /api/profile/me
     */
    public function me(Request $request): UserResource
    {
        $user = $request->user();

        return (new UserResource($user))
            ->message('Profile berhasil diambil');
    }
}
