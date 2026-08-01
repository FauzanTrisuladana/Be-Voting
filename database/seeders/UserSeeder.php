<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Fauzan Trisuladana',
            'email' => 'fauzantrisuladana@gmail.com',
            'status' => 'Aktif',
            'provider' => 'google',
            'id_provider' => '105102120350029888485',
            'profile_image' => 'https://lh3.googleusercontent.com/a/ACg8ocJgjcrmN_OSQiAu_cwa0iqqeCT2DJCNExzdL7ztc3_I2er2KRM1=s96-c',
            'activated_at' => now(),
        ]);

        User::create([
            'name' => 'pemudanogotirto v',
            'email' => 'pemudanogotirtov@gmail.com',
            'status' => 'Aktif',
            'provider' => 'google',
            'id_provider' => '109612083245670967545',
            'profile_image' => 'https://lh3.googleusercontent.com/a/ACg8ocLfPbny3Ji9mh5eCjtHmxKLPHIm-ozNYZt2NR1KZjnfb01e-Q=s96-c',
            'activated_at' => now(),
        ]);
    }
}
