<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        $b1 = Course::create([
            'title'     => 'Bachata con Ronald y Alba',
            'slug'      => 'bachata-roland-alba',
            'thumbnail' => 'styles/bachata.png',
            'level'     => 'beginner',
            'premium'   =>  true,
            'type'      => 'partnerwork',
            'duration'  => '',
            'excerpt'   => '',
            'content'   => '',
            'playlist'  => "<div style='padding:56.25% 0 0 0;position:relative;'><iframe src='https://vimeo.com/showcase/8090154/embed' allowfullscreen frameborder='0' style='position:absolute;top:0;left:0;width:100%;height:100%;'></iframe></div>",
            'video'     => '',
        ]);
        $b1->styles()->attach(1);


        // 2
        $cNerea = Course::create([
            'title'     => 'Classes con Nerea',
            'slug'      => 'clases-con-nerea',
            'thumbnail' => 'styles/lady-style.png',
            'level'     => 'beginner',
            'premium'   =>  true,
            'type'      => 'lady-styling',
            'duration'  => '',
            'excerpt'   => '',
            'content'   => '',
            'playlist'  => "<div style='padding:56.25% 0 0 0;position:relative;'><iframe src='https://vimeo.com/showcase/8090225/embed' allowfullscreen frameborder='0' style='position:absolute;top:0;left:0;width:100%;height:100%;'></iframe></div>",
            'video'     => '',
        ]);
        $cNerea->styles()->attach(1);

        // 3
        $cJN = Course::create([
            'title'     => 'Clases con Juan & Nerea',
            'slug'      => 'clases-juan-nerea',
            'thumbnail' => 'styles/bachata.png',
            'level'     => 'beginner',
            'premium'   =>  true,
            'type'      => 'partnerwork',
            'duration'  => '',
            'excerpt'   => '',
            'content'   => '',
            'playlist'  => "<div style='padding:56.25% 0 0 0;position:relative;'><iframe src='https://vimeo.com/showcase/8090238/embed' allowfullscreen frameborder='0' style='position:absolute;top:0;left:0;width:100%;height:100%;'></iframe></div>",
            'video'     => '',
        ]);
        $cJN->styles()->attach(1);


        $c1 = Course::create([
            'title'     => 'Bachata all-in-one',
            'slug'      => 'bachata-all-in-one',
            'thumbnail' => 'styles/bachata.png',
            'level'     => 'intermediate',
            'premium'   =>  true,
            'type'      => 'partnerwork',
            'duration'  => '',
            'excerpt'   => '',
            'content'   => '',
            'playlist'  => "<div style='padding:56.25% 0 0 0;position:relative;'><iframe src='https://vimeo.com/showcase/8090239/embed' allowfullscreen frameborder='0' style='position:absolute;top:0;left:0;width:100%;height:100%;'></iframe></div>",
            'video'     => '',
        ]);
        $c1->styles()->attach(1);


        // 4
        $c1 = Course::create([
            'title'     => 'Reggaeton',
            'slug'      => 'reggaeton',
            'thumbnail' => 'styles/reggaeton.png',
            'level'     => 'beginner',
            'premium'   =>  true,
            'type'      => 'body-movement',
            'duration'  => '',
            'excerpt'   => '',
            'content'   => '',
            'playlist'  => "<div style='padding:56.25% 0 0 0;position:relative;'><iframe src='https://vimeo.com/showcase/8090389/embed' allowfullscreen frameborder='0' style='position:absolute;top:0;left:0;width:100%;height:100%;'></iframe></div>",
            'video'     => '',
        ]);
        $c1->styles()->attach(2);

        // 6
        $fitness = Course::create([
            'title'     => 'Fitness',
            'slug'      => 'Fitness',
            'thumbnail' => 'styles/fitness.png',
            'level'     => 'beginner',
            'premium'   =>  true,
            'type'      => 'fitness',
            'duration'  => '',
            'excerpt'   => '',
            'content'   => '',
            'playlist'  => "<div style='padding:56.25% 0 0 0;position:relative;'><iframe src='https://vimeo.com/showcase/8090397/embed' allowfullscreen frameborder='0' style='position:absolute;top:0;left:0;width:100%;height:100%;'></iframe></div>",
            'video'     => '',
        ]);
        $fitness->styles()->attach(4);

        // 7
        $c1 = Course::create([
            'title'     => 'Flexibility',
            'slug'      => 'Flexibility',
            'thumbnail' => 'styles/flexibilidad.png',
            'level'     => 'beginner',
            'premium'   =>  true,
            'type'      => 'body-movement',
            'duration'  => '',
            'excerpt'   => '',
            'content'   => '',
            'playlist'  => "<div style='padding:56.25% 0 0 0;position:relative;'><iframe src='https://vimeo.com/showcase/8090400/embed' allowfullscreen frameborder='0' style='position:absolute;top:0;left:0;width:100%;height:100%;'></iframe></div>",
            'video'     => '',
        ]);
        $c1->styles()->attach(8);
    }
}

// 1 Bachata
// 2 Reggaeton
// 3 Hip Hop
// 4 Fitness
// 5 Ballet
// 6 Latin aerobics
// 7 Lady Styling
// 8 Flexibility