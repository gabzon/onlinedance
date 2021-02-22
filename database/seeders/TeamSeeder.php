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
            'role'              => 'admin',
            'email_verified_at' => now()
        ]);

        User::firstOrCreate([
            'name'              => 'Dario Diaz Santana',
            'email'             => 'dariodiazsantana@gmail.com',
            'password'          => Hash::make('password'),
            'role'              => 'admin',
            'email_verified_at' => now()
        ]);

        User::firstOrCreate([
            'name'              => 'Edgar Ochoa',
            'email'             => 'edgar8amedina@gmail.com ',
            'password'          => Hash::make('password'),
            'role'              => 'admin',
            'email_verified_at' => now()
        ]);

        User::firstOrCreate([
            'name'              => 'Jose Gomez',
            'email'             => 'jose@email.com',
            'password'          => Hash::make('password'),    
            'role'              => 'guest',        
            'email_verified_at' => now()
        ]);

        User::firstOrCreate([
            'name'              => 'Maria Sanchez',
            'email'             => 'maria@email.com',            
            'password'          => Hash::make('password'),            
            'role'              => 'user',
            'email_verified_at' => now()
        ]);

        User::firstOrCreate([
            'name'              => 'Maria Sanchez',
            'email'             => 'Albasanmol@gmail.com',            
            'password'          => Hash::make('password'),            
            'role'              => 'admin',
            'email_verified_at' => now()
        ]);
    }
}
