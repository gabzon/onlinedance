<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
            'name'              => 'Gabriel Zambrano',
            'email'             => 'gab.zambrano@gmail.com',
            'password'          => Hash::make('password'),
            'email_verified_at' => now()
        ]);
    }
}
