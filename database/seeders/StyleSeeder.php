<?php

namespace Database\Seeders;

use App\Models\Style;
use Illuminate\Database\Seeder;

class StyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Style::create([
            'name' => 'Bachata',
            'slug'  => 'bachata',
            'description' => 'from dominican republic',            
        ]);

        Style::create([
            'name' => 'Line Salsa',
            'slug'  => 'salsa',
            'description' => 'from USA',            
        ]);

        Style::create([
            'name' => 'Cuban Salsa',
            'slug'  => 'salsa',
            'description' => 'from cuba',            
        ]);

        Style::create([
            'name' => 'Reggaeton',
            'slug'  => 'reggaeton',
            'description' => 'from puerto rico',            
        ]);

        Style::create([
            'name' => 'Kizomba',
            'slug'  => 'kizomba',
            'description' => 'from angola',            
        ]);

        Style::create([
            'name' => 'Hip Hop',
            'slug'  => 'hip-hop',
            'description' => 'from angola',            
        ]);
    }
}
