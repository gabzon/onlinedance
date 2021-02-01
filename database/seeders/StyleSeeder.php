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
        // 1
        Style::create([
            'name'          => 'Bachata',
            'slug'          => 'bachata',
            'thumbnail'     => 'styles/bachata.jpg',
            'description'   => 'from dominican republic',       
        ]);

        // 2
        Style::create([
            'name'          => 'Line Salsa',
            'slug'          => 'salsa',
            'thumbnail'     => 'styles/line-salsa.jpg',
            'description'   => 'from USA',            
        ]);

        // 3
        Style::create([
            'name'          => 'Cuban Salsa',
            'slug'          => 'salsa',
            'thumbnail'     => 'styles/cuban-salsa.jpg',
            'description'   => 'from cuba',            
        ]);

        // 4
        Style::create([
            'name'          => 'Reggaeton',
            'slug'          => 'reggaeton',
            'thumbnail'     => 'styles/reggaeton.jpg',
            'description'   => 'from puerto rico',            
        ]);

        // 5
        Style::create([
            'name'          => 'Kizomba',
            'slug'          => 'kizomba',
            'thumbnail'     => 'styles/kizomba.jpg',
            'description'   => 'from angola',            
        ]);

        // 6
        Style::create([
            'name'          => 'Hip Hop',
            'slug'          => 'hip-hop',
            'thumbnail'     => 'styles/hip-hop.jpg',
            'description'   => 'from United States',            
        ]);

        // 7
        Style::create([
            'name'          => 'Fitness',
            'slug'          => 'Fitness',
            'thumbnail'     => 'styles/fitness.jpg',
            'description'   => 'from angola',            
        ]);

        // 8
        Style::create([
            'name'          => 'Ballet',
            'slug'          => 'ballet',
            'thumbnail'     => 'styles/ballet.jpg',
            'description'   => 'very old',            
        ]);

        // 9
        Style::create([
            'name'          => 'Latin aerobics',
            'slug'          => 'latin-aerobics',
            'thumbnail'     => 'styles/zumba.jpg',
            'description'   => 'sports',            
        ]);

    }
}
