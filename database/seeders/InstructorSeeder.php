<?php

namespace Database\Seeders;

use App\Models\Instructor;
use Faker\Factory;
use Illuminate\Database\Seeder;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        
        // 1
        $alba = Instructor::create([
            'first_name'    => 'Alba',
            'last_name'     => 'Sánchez',
            'slug'          => 'alba-sanchez',
            'origin'        => 'Elche, Spain',
            'bio'           => 'Coming from Elche, Alicante, Alba started her dancing carrier at the age of 13 as a classical ballet student./in classical ballet.<br><br>In 2011 she met her current partner Ronald and with him she entered the world of Latin dances. Shortly after, they began to compete in Spain and beyond, and have won the title of world champions 2 times. There is no stopping them.<br><br>Alba loves to teach lady style classes and has more than 3000 students online.',
            'facebook'      => 'https://www.facebook.com/alba.sanchez.568',
            'instagram'     => 'https://instagram.com',
            'twitter'       => 'https://twitter.com',
            'tiktok'        => 'https://tiktok.com',
            'youtube'       => 'https://www.youtube.com/channel/UCy79Zqy7AoSpHSBdEWu6uiw',            
            'video'         => '',
            'portrait'      => 'instructors/alba-bg-white.JPG',
            'thumbnail'     => 'https://randomuser.me/api/portraits/women/' . rand(1,99) . '.jpg',  
            'image'         => 'https://loremflickr.com/1920/180/female',          
            'phone'         => $faker->phoneNumber,
            'email'         => $faker->safeEmail,
            'birthday'      => $faker->dateTimeBetween($startDate = '-40 years', $endDate = '-20 years', $timezone = null),
            'beginning'     => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-5 years', $timezone = null),
            'nickname'      => $faker->userName,
        ]);
        $alba->styles()->attach(1);

        // 2
        $ronald = Instructor::create([
            'first_name'    => 'Ronald',
            'last_name'     => 'Castro',
            'slug'          => 'ronald-castro',
            'origin'        => 'Colombia',
            'bio'           => 'Born and raised in Colombia, he moved to Valencia, Spain and lives there since 2001. Since his childhood he has been a part of dance and sports worlds, practicing dance styles such as Break Dance and Salsa Caleña, among others. In 2005 he began to compete in Salsa and Bachata and shortly afterwards he obtained the title of Bachata Champion of Spain. Since 2012, he and his current partner Alba Sanchez were unstoppable in every competition that they participated in. Today, they are Two-Time World Champions and they travel all over the world teaching their original style.',
            'facebook'      => 'https://www.facebook.com/ronald.castroviveros.7',
            'portrait'      => 'instructors/ronald-bg-white.jpg',
            'thumbnail'     => 'https://randomuser.me/api/portraits/men/' . rand(1,99) . '.jpg',
            'image'         => 'https://loremflickr.com/1920/180/male',
            'phone'         => $faker->phoneNumber,
            'email'         => $faker->safeEmail,
            'birthday'      => $faker->dateTimeBetween($startDate = '-40 years', $endDate = '-20 years', $timezone = null),
            'beginning'     => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-5 years', $timezone = null),
            'nickname'      => $faker->userName,
        ]);
        $ronald->styles()->attach(1);

        // 3
        $sara = Instructor::create([
            'first_name'    => 'Sara',
            'last_name'     => 'Linaza',
            'slug'          => 'sara-linaza',
            'origin'        => 'Sevilla, Spain',
            'bio'           => 'Sara is from Seville, Spain, and she began her training in Salsa and Bachata when she was only 14 years old. <br><br>A few years later, she realized that it was her passion and she wanted to become a teacher.<br><br>But it was in 2015 when, together with Dario, she began to teach classes and travel around the world teaching her/their original Bachata style. Today, both of them promote this dancing style.',          
            'portrait'      => 'instructors/sara-bg-white.JPG',     
            'thumbnail'     => 'https://randomuser.me/api/portraits/women/' . rand(1,99) . '.jpg',
            'image'         => 'https://loremflickr.com/1920/180/female',
            'phone'         => $faker->phoneNumber,
            'email'         => $faker->safeEmail,
            'birthday'      => $faker->dateTimeBetween($startDate = '-40 years', $endDate = '-20 years', $timezone = null),
            'beginning'     => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-5 years', $timezone = null),
            'nickname'      => $faker->userName,       
        ]);
        $sara->styles()->attach(1);

        // 4
        $dario = Instructor::create([
            'first_name'    => 'Dario',
            'last_name'     => 'Diaz',
            'slug'          => 'dario-diaz',
            'origin'        => 'Las Palmas, Spain',
            'bio'           => 'Born in Las Palmas de Gran Canaria, Spain, he began his training in Latin dances over 15 years ago.<br><br>Already in the first years of his carrier, he moved to the island to start teaching, and at only 17 he was already a teacher in one of the largest dance academies in the entire islands.<br><br>It was in 2015 when he met Sara and they began their journey together. Today they are known all over the world for their different and original Bachata style.',
            'portrait'      => 'instructors/dario-bg-white.JPG',
            'thumbnail'     => 'https://randomuser.me/api/portraits/men/' . rand(1,99) . '.jpg',
            'image'         => 'https://loremflickr.com/1920/180/male',
            'phone'         => $faker->phoneNumber,
            'email'         => $faker->safeEmail,
            'birthday'      => $faker->dateTimeBetween($startDate = '-40 years', $endDate = '-20 years', $timezone = null),
            'beginning'     => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-5 years', $timezone = null),
            'nickname'      => $faker->userName,
        ]);
        $dario->styles()->attach(1);

        // 5
        $raquel = Instructor::create([
            'first_name' => 'Raquel',
            'last_name'  => 'Martínez',
            'slug'       => 'raquel-martinez',
            'origin'     => 'Spain',
            'bio'        => 'Personal trainer with more than 8 years of experience in the world of fitness',
            'portrait'      => 'instructors/RAQUEL.JPG',
            'thumbnail'     => 'https://randomuser.me/api/portraits/women/' . rand(1,99) . '.jpg',
            'image'         => 'https://loremflickr.com/1920/180/female',
            'phone'         => $faker->phoneNumber,
            'email'         => $faker->safeEmail,
            'birthday'      => $faker->dateTimeBetween($startDate = '-40 years', $endDate = '-20 years', $timezone = null),
            'beginning'     => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-5 years', $timezone = null),
            'nickname'      => $faker->userName,
        ]);
        $raquel->styles()->attach(7);

        // 6
        $cristian = Instructor::create([
            'first_name'    => 'Cristian',
            'last_name'     => 'Mateu',
            'slug'          => 'cristian-mateu',
            'origin'        => 'Spain',
            'bio'           => 'Cristian is a great professional of directed activities with more than ten years of experience in different modalities such as fitness, dance, cardio.',
            'portrait'         => 'instructors/CRISTIAN.jpg',
            'thumbnail'     => 'https://randomuser.me/api/portraits/men/' . rand(1,99) . '.jpg',
            'image'         => 'https://loremflickr.com/1920/180/male',
            'phone'         => $faker->phoneNumber,
            'email'         => $faker->safeEmail,
            'birthday'      => $faker->dateTimeBetween($startDate = '-40 years', $endDate = '-20 years', $timezone = null),
            'beginning'     => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-5 years', $timezone = null),
            'nickname'      => $faker->userName,
        ]);
        $cristian->styles()->attach(9);

        // 7
        $helena = Instructor::create([
            'first_name'    => 'Helena',
            'last_name'     => 'Sánchez',
            'slug'          => 'helena-sanchez',
            'origin'        => 'Elche, Spain',
            'bio'           => 'Born in Elche and graduated in medicine from the Miguel Hernández University in Elche, she has received a long training in classical dance under great teachers, including Ana Carreño, Sofia Sancho, Carmela García, etc.',
            'portrait'         => 'instructors/HELENA.jpeg',
            'thumbnail'     => 'https://randomuser.me/api/portraits/women/' . rand(1,99) . '.jpg',
            'image'         => 'https://loremflickr.com/1920/180/female',
            'phone'         => $faker->phoneNumber,
            'email'         => $faker->safeEmail,
            'birthday'      => $faker->dateTimeBetween($startDate = '-40 years', $endDate = '-20 years', $timezone = null),
            'beginning'     => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-5 years', $timezone = null),
            'nickname'      => $faker->userName,
        ]);
        $helena->styles()->attach(9);


        // 8
        $omar = Instructor::create([
            'first_name'    => 'Omar Enrique',
            'last_name'     => 'Trujillo Moreno',
            'slug'          => 'omar-enrique-trujillo-moreno',
            'origin'        => 'Venezuela',
            'bio'           => 'Born in Venezuela, he started dancing at the age of 6 in different schools of salsa, contemporary, and folklore. At the age of 13 he began his training in classical dance at the Gustavo Franklin ballet school. At 16 he began his studies in urban dance at Broadway Dance Center in New York. He won different national and international competitions with his group, Real Strong Fam. He currently resides in the Canary Islands.',
            'portrait'      => 'instructors/omar-bg-white.JPG',
            'thumbnail'     => 'https://randomuser.me/api/portraits/men/' . rand(1,99) . '.jpg',
            'image'         => 'https://loremflickr.com/1920/180/male',
            'phone'         => $faker->phoneNumber,
            'email'         => $faker->safeEmail,
            'birthday'      => $faker->dateTimeBetween($startDate = '-40 years', $endDate = '-20 years', $timezone = null),
            'beginning'     => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-5 years', $timezone = null),
            'nickname'      => $faker->userName,
            ]);
        $omar->styles()->attach(6);


        // 9
        $juan = Instructor::create([
            'first_name'    => 'Juan',
            'last_name'     => '',
            'slug'          => 'juan',
            'origin'        => 'Albacete, Spain',
            'bio'           => 'Born in Albacete, Spain, his world has always been the one of motorcycles (o de motores como “engine”?), until Nerea crossed his path. With her by his side, he entered the world of dance, advancing at a fast pace. Thanks to their commitment and dedication, they have become incredible teachers and artists. ',
            'portrait'         => 'instructors/JUAN.jpg',
            'thumbnail'     => 'https://randomuser.me/api/portraits/men/' . rand(1,99) . '.jpg',
            'image'         => 'https://loremflickr.com/1920/180/male',
            'phone'         => $faker->phoneNumber,
            'email'         => $faker->safeEmail,
            'birthday'      => $faker->dateTimeBetween($startDate = '-40 years', $endDate = '-20 years', $timezone = null),
            'beginning'     => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-5 years', $timezone = null),
            'nickname'      => $faker->userName,
        ]);
        $juan->styles()->attach(1);


        // 10
        $nerea = Instructor::create([
            'first_name'    => 'Nerea',
            'last_name'     => '',
            'slug'          => 'nerea',
            'origin'        => 'Albacete, Spain',
            'bio'           => 'Coming from Albacete, Spain, Nerea has been involved in dancing (sevillanas, rhythmic gymnastics…) since she was a child. When she was 8 years old she started practicing Latin dances and doing performances. Years later she met Juan and they began to dance together; at the beginning as a hobby, and later training with Ronald and Alba and winning important competitions.',
            'portrait'         => 'instructors/NEREA.jpg',
            'thumbnail'     => 'https://randomuser.me/api/portraits/women/' . rand(1,99) . '.jpg',
            'image'         => 'https://loremflickr.com/1920/180/female',
            'phone'         => $faker->phoneNumber,
            'email'         => $faker->safeEmail,
            'birthday'      => $faker->dateTimeBetween($startDate = '-40 years', $endDate = '-20 years', $timezone = null),
            'beginning'     => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-5 years', $timezone = null),
            'nickname'      => $faker->userName,
        ]);
        $nerea->styles()->attach(1);


        // 11
        $mar = Instructor::create([
            'first_name'    => 'Mar',
            'last_name'     => 'Garcia',
            'slug'          => 'mar-garcia',
            'origin'        => 'Tenerife, Spain',         
            'bio'           => 'Born in Tenerife, Spain, Mar has liked all kinds of dance disciplines from ballet to salsa from a very young age, and has worked hard so she could train with the best. For the last few years she has been dedicating her time to Salsa and urban dance. She holds titles as the 2018 Salsa World Champion and the 2019 Urban Latin Champion.',
            'portrait'         => 'instructors/mar-bg-white.jpg',
            'thumbnail'     => 'https://randomuser.me/api/portraits/women/' . rand(1,99) . '.jpg',
            'image'         => 'https://loremflickr.com/1920/180/female',
            'phone'         => $faker->phoneNumber,
            'email'         => $faker->safeEmail,
            'birthday'      => $faker->dateTimeBetween($startDate = '-40 years', $endDate = '-20 years', $timezone = null),
            'beginning'     => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-5 years', $timezone = null),            
            'nickname'      => $faker->userName,
        ]);
        $mar->styles()->attach(2);


        // 12
        $laura = Instructor::create([
            'first_name'    => 'Laura',
            'last_name'     => 'Rodriguez',
            'slug'          => 'laura-rodriguez',
            'origin'        => 'Las Palmas, Spain',
            'bio'           => 'Born and raised in Las Palmas de Gran Canaria, Spain, Laura entered the world of sports at the age of 5 with rhythmic gymnastics. At 18 she decided to focus more on classical dance and other dance styles. Years later, she dedicated herself more deeply to the Latin dances, Bachata being her favorite. Today, she is the World Champion of Bachata fusion.',
            'portrait'         => 'instructors/LAURA.jpeg',
            'thumbnail'     => 'https://randomuser.me/api/portraits/women/' . rand(1,99) . '.jpg',
            'image'         => 'https://loremflickr.com/1920/180/female',
            'phone'         => $faker->phoneNumber,
            'email'         => $faker->safeEmail,
            'birthday'      => $faker->dateTimeBetween($startDate = '-40 years', $endDate = '-20 years', $timezone = null),
            'beginning'     => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-5 years', $timezone = null),            
            'nickname'      => $faker->userName,
        ]);
        $laura->styles()->attach(1);
    }
}
