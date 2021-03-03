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
            'thumbnail'     => 'styles/bachata.png',
            'description'   => 'Learn to dance all the styles (sensual, modern, traditional…) to this spicy Dominican rhythm. Basic to advanced level courses, couples and solo style, taught worldwide by the best artists and teachers.',       
        ]);

        // 2
        Style::create([
            'name'          => 'Reggaeton',
            'slug'          => 'reggaeton',
            'thumbnail'     => 'styles/reggaeton.png',
            'description'   => 'Dance and learn new choreographies and movements to the rhythm of the best commercial music of the moment. Classes adapted for all levels',            
        ]);

        // 3
        Style::create([
            'name'          => 'Hip Hop',
            'slug'          => 'hip-hop',
            'thumbnail'     => 'styles/hip-hop.png',
            'description'   => 'Hip-hop is a wide category that includes a variety of styles (breaking, locking, popping, etc.). We will learn to control each movement of our bodies, which will help us to feel more comfortable when using these movements in Latin dances. We will advance in a progressive way, so your general dancing level doesn’t matter.',            
        ]);

        // 4
        Style::create([
            'name'          => 'Fitness',
            'slug'          => 'Fitness',
            'thumbnail'     => 'styles/fitness.png',
            'description'   => 'To enjoy dancing we have to be in the best possible shape, and with these classes we will get there. Our exercise routines are adapted so you can perform them anywhere, regardless of your physical condition.',            
        ]);

        // 5
        Style::create([
            'name'          => 'Ballet',
            'slug'          => 'ballet',
            'thumbnail'     => 'styles/ballet.png',
            'description'   => 'It is not impossible for adults and it can help you lead a healthier and more comfortable life, thanks to the benefits it brings to your body and mind. If you have always wanted to practice ballet but have never dared, check out everything you can gain with this workout (reducing cardiovascular risks, strengthening muscles, improving posture and coordination, improving memory and discipline).',            
        ]);

        // 6
        Style::create([
            'name'          => 'Latin aerobics',
            'slug'          => 'latin-aerobics',
            'thumbnail'     => 'styles/zumba.png',
            'description'   => 'sports',            
        ]);

        // 7
        Style::create([
            'name'          => 'Lady Styling',
            'slug'          => 'lady-styling',
            'thumbnail'     => 'styles/lady-style.png',
            'description'   => 'Classes of different levels (from basic to advanced) that will help you to bring out your sensual and feminine side in any type of dance bachata, salsa, kizomba and more.
            ',            
        ]);

        // 8
        Style::create([
            'name'          => 'Flexibility',
            'slug'          => 'flexibility',
            'thumbnail'     => 'styles/flexibilidad.png',
            'description'   => 'Flexibility is one of the most important aspects for a dancer and has many benefits, such as improving body posture, reducing injury risks, and increasing range of motion.',            
        ]);    

                // 2
        // Style::create([
        //     'name'          => 'Line Salsa',
        //     'slug'          => 'salsa',
        //     'thumbnail'     => 'styles/line-salsa.jpg',
        //     'description'   => 'from USA',            
        // ]);

        // 3
        // Style::create([
        //     'name'          => 'Cuban Salsa',
        //     'slug'          => 'salsa',
        //     'thumbnail'     => 'styles/cuban-salsa.jpg',
        //     'description'   => 'from cuba',            
        // ]);

        // 4


        // 5
        // Style::create([
        //     'name'          => 'Kizomba',
        //     'slug'          => 'kizomba',
        //     'thumbnail'     => 'styles/kizomba.jpg',
        //     'description'   => 'from angola',            
        // ]);

        // Style::create([
        //     'name'          => 'Live classes',
        //     'slug'          => 'lady-styling',
        //     'thumbnail'     => 'styles/zumba.jpg',
        //     'description'   => 'Live classes of all styles and different levels. Here you can ask for advice, and our teachers will be happy to resolve any doubts you might have and give instant corrections so you can progress even faster.',            
        // ]);

    }
}




   