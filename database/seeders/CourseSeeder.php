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
        $c1 = Course::create([
            'title'     => 'Lady Styling Bachata',
            'slug'      => 'lady-styling-bachata',
            'image'     => 'https://images.unsplash.com/photo-1610065094717-1cfb45e7b784?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1024&ixlib=rb-1.2.1&q=80&w=1920',
            'level'     => 'beginner',
            'premium'   =>  true,
            'type'      => 'lady-styling',
            'duration'  => '10:14',
            'excerpt'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, accusantium velit natus saepe quam, illum consequatur praesentium eveniet culpa impedit optio aliquid, qui facere sunt ab at veniam autem placeat!',
            'content'   => 'Ornare arcu dui vivamus arcu felis bibendum ut tristique et. Pharetra massa massa ultricies mi quis. Consequat interdum varius sit amet mattis. Sed risus ultricies tristique nulla aliquet enim. Nibh nisl condimentum id venenatis a. Enim facilisis gravida neque convallis a cras semper. Donec enim diam vulputate ut pharetra sit amet aliquam. Id volutpat lacus laoreet non curabitur gravida arcu ac tortor. Iaculis nunc sed augue lacus viverra vitae congue eu consequat. Sed risus pretium quam vulputate dignissim suspendisse in est. Risus in hendrerit gravida rutrum quisque. Tincidunt praesent semper feugiat nibh sed pulvinar proin. Non nisi est sit amet facilisis magna etiam tempor orci. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Sed elementum tempus egestas sed. In egestas erat imperdiet sed euismod nisi porta lorem mollis.',
            'playlist'  => "<div style='padding:56.25% 0 0 0;position:relative;'><iframe src='https://vimeo.com/showcase/7975335/embed' allowfullscreen frameborder='0' style='position:absolute;top:0;left:0;width:100%;height:100%;'></iframe></div>",
            'video'     => '<iframe width="100%" height="550" src="https://www.youtube.com/embed/h5mdsgZnpyI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        ]);
        $c1->styles()->attach(1);
        

        $c1 = Course::create([
            'title'     => 'Reggaeton',
            'slug'      => 'reggaeton',
            'image'     => 'https://images.unsplash.com/photo-1610101858179-d56197255036?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwxfDB8MXxyYW5kb218fHx8fHx8fA&ixlib=rb-1.2.1&q=80&w=1080',
            'level'     => 'intermediate',
            'premium'   =>  true,
            'type'      => 'body-movement',
            'duration'  => '12:25',
            'excerpt'   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem architecto, doloremque aliquid pariatur, doloribus tempora ad provident accusamus exercitationem, consectetur nesciunt officiis ipsam repellat voluptates. Soluta recusandae eius enim sed.',
            'content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sodales ut etiam sit amet nisl purus in mollis. Sit amet justo donec enim diam. Felis imperdiet proin fermentum leo vel orci porta non. Euismod in pellentesque massa placerat duis. Mus mauris vitae ultricies leo integer. Pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna. Eget mi proin sed libero enim sed faucibus turpis. Viverra maecenas accumsan lacus vel. Sed id semper risus in hendrerit gravida rutrum. Velit dignissim sodales ut eu sem. Mi ipsum faucibus vitae aliquet nec ullamcorper sit. Sem fringilla ut morbi tincidunt augue interdum velit. Vel elit scelerisque mauris pellentesque pulvinar pellentesque. At volutpat diam ut venenatis. Magna fermentum iaculis eu non. At in tellus integer feugiat scelerisque. Enim sit amet venenatis urna cursus eget nunc scelerisque viverra. Congue nisi vitae suscipit tellus mauris a diam maecenas. Ornare arcu dui vivamus arcu felis bibendum ut tristique et. Pharetra massa massa ultricies mi quis. Consequat interdum varius sit amet mattis. Sed risus ultricies tristique nulla aliquet enim. Nibh nisl condimentum id venenatis a. Enim facilisis gravida neque convallis a cras semper. Donec enim diam vulputate ut pharetra sit amet aliquam. Id volutpat lacus laoreet non curabitur gravida arcu ac tortor. Iaculis nunc sed augue lacus viverra vitae congue eu consequat. Sed risus pretium quam vulputate dignissim suspendisse in est. Risus in hendrerit gravida rutrum quisque. Tincidunt praesent semper feugiat nibh sed pulvinar proin. Non nisi est sit amet facilisis magna etiam tempor orci. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Sed elementum tempus egestas sed. In egestas erat imperdiet sed euismod nisi porta lorem mollis.',
            'playlist'  => "<div style='padding:56.25% 0 0 0;position:relative;'><iframe src='https://vimeo.com/showcase/7975335/embed' allowfullscreen frameborder='0' style='position:absolute;top:0;left:0;width:100%;height:100%;'></iframe></div>",
            'video'     => '<iframe width="100%" height="550" src="https://www.youtube.com/embed/vsjoRzezy4I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        ]);
        $c1->styles()->attach(4);


        $c1 = Course::create([
            'title'     => 'Lady Styling Bachata',
            'slug'      => 'lady-styling-bachata',
            'image'     => 'https://picsum.photos/800/800',
            'level'     => 'intermediate',
            'premium'   =>  true,
            'type'      => 'lady-styling',
            'duration'  => '13:05',
            'excerpt'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, accusantium velit natus saepe quam, illum consequatur praesentium eveniet culpa impedit optio aliquid, qui facere sunt ab at veniam autem placeat!',
            'content'   => 'Ornare arcu dui vivamus arcu felis bibendum ut tristique et. Pharetra massa massa ultricies mi quis. Consequat interdum varius sit amet mattis. Sed risus ultricies tristique nulla aliquet enim. Nibh nisl condimentum id venenatis a. Enim facilisis gravida neque convallis a cras semper. Donec enim diam vulputate ut pharetra sit amet aliquam. Id volutpat lacus laoreet non curabitur gravida arcu ac tortor. Iaculis nunc sed augue lacus viverra vitae congue eu consequat. Sed risus pretium quam vulputate dignissim suspendisse in est. Risus in hendrerit gravida rutrum quisque. Tincidunt praesent semper feugiat nibh sed pulvinar proin. Non nisi est sit amet facilisis magna etiam tempor orci. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Sed elementum tempus egestas sed. In egestas erat imperdiet sed euismod nisi porta lorem mollis.',
            'playlist'  => "<div style='padding:56.25% 0 0 0;position:relative;'><iframe src='https://vimeo.com/showcase/7975335/embed' allowfullscreen frameborder='0' style='position:absolute;top:0;left:0;width:100%;height:100%;'></iframe></div>",
            'video'     => '<iframe width="100%" height="550" src="https://www.youtube.com/embed/gpv7ayf_tyE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        ]);
        $c1->styles()->attach(1);

        $c1 = Course::create([
            'title'     => 'Reggaeton',
            'slug'      => 'reggaeton',
            'image'     => 'https://source.unsplash.com/random/800x800',
            'level'     => 'advanced',
            'premium'   =>  true,
            'type'      => 'body-movement',
            'duration'  => '12:54',
            'excerpt'   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem architecto, doloremque aliquid pariatur, doloribus tempora ad provident accusamus exercitationem, consectetur nesciunt officiis ipsam repellat voluptates. Soluta recusandae eius enim sed.',
            'content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sodales ut etiam sit amet nisl purus in mollis. Sit amet justo donec enim diam. Felis imperdiet proin fermentum leo vel orci porta non. Euismod in pellentesque massa placerat duis. Mus mauris vitae ultricies leo integer. Pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna. Eget mi proin sed libero enim sed faucibus turpis. Viverra maecenas accumsan lacus vel. Sed id semper risus in hendrerit gravida rutrum. Velit dignissim sodales ut eu sem. Mi ipsum faucibus vitae aliquet nec ullamcorper sit. Sem fringilla ut morbi tincidunt augue interdum velit. Vel elit scelerisque mauris pellentesque pulvinar pellentesque. At volutpat diam ut venenatis. Magna fermentum iaculis eu non. At in tellus integer feugiat scelerisque. Enim sit amet venenatis urna cursus eget nunc scelerisque viverra. Congue nisi vitae suscipit tellus mauris a diam maecenas. Ornare arcu dui vivamus arcu felis bibendum ut tristique et. Pharetra massa massa ultricies mi quis. Consequat interdum varius sit amet mattis. Sed risus ultricies tristique nulla aliquet enim. Nibh nisl condimentum id venenatis a. Enim facilisis gravida neque convallis a cras semper. Donec enim diam vulputate ut pharetra sit amet aliquam. Id volutpat lacus laoreet non curabitur gravida arcu ac tortor. Iaculis nunc sed augue lacus viverra vitae congue eu consequat. Sed risus pretium quam vulputate dignissim suspendisse in est. Risus in hendrerit gravida rutrum quisque. Tincidunt praesent semper feugiat nibh sed pulvinar proin. Non nisi est sit amet facilisis magna etiam tempor orci. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Sed elementum tempus egestas sed. In egestas erat imperdiet sed euismod nisi porta lorem mollis.',
            'playlist'  => "<div style='padding:56.25% 0 0 0;position:relative;'><iframe src='https://vimeo.com/showcase/7975335/embed' allowfullscreen frameborder='0' style='position:absolute;top:0;left:0;width:100%;height:100%;'></iframe></div>",
            'video'     => '<iframe width="100%" height="550" src="https://www.youtube.com/embed/TQskx-mdNYU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        ]);
        $c1->styles()->attach(4);

        $c1 = Course::create([
            'title'     => 'Lady Styline Salsa',
            'slug'      => 'lady-styling-salsa',
            'image'     => 'https://images.unsplash.com/photo-1609452231591-f03a547a0fcc?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1024&ixlib=rb-1.2.1&q=80&w=1024',
            'level'     => 'beginner',
            'premium'   =>  true,
            'type'      => 'lady-styling',
            'duration'  => '11:40',
            'excerpt'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sit. Quaerat, iure. At ipsa tempora assumenda ad voluptatem, natus sequi. Totam quae aliquam aspernatur nam iusto nisi, earum eaque molestias.',
            'content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sodales ut etiam sit amet nisl purus in mollis. Sit amet justo donec enim diam. Felis imperdiet proin fermentum leo vel orci porta non. Euismod in pellentesque massa placerat duis. Mus mauris vitae ultricies leo integer. Pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna. Eget mi proin sed libero enim sed faucibus turpis. Viverra maecenas accumsan lacus vel. Sed id semper risus in hendrerit gravida rutrum. Velit dignissim sodales ut eu sem. Mi ipsum faucibus vitae aliquet nec ullamcorper sit. Sem fringilla ut morbi tincidunt augue interdum velit. Vel elit scelerisque mauris pellentesque pulvinar pellentesque. At volutpat diam ut venenatis. Magna fermentum iaculis eu non. At in tellus integer feugiat scelerisque. Enim sit amet venenatis urna cursus eget nunc scelerisque viverra. Congue nisi vitae suscipit tellus mauris a diam maecenas. Ornare arcu dui vivamus arcu felis bibendum ut tristique et. Pharetra massa massa ultricies mi quis. Consequat interdum varius sit amet mattis. Sed risus ultricies tristique nulla aliquet enim. Nibh nisl condimentum id venenatis a. Enim facilisis gravida neque convallis a cras semper. Donec enim diam vulputate ut pharetra sit amet aliquam. Id volutpat lacus laoreet non curabitur gravida arcu ac tortor. Iaculis nunc sed augue lacus viverra vitae congue eu consequat. Sed risus pretium quam vulputate dignissim suspendisse in est. Risus in hendrerit gravida rutrum quisque. Tincidunt praesent semper feugiat nibh sed pulvinar proin. Non nisi est sit amet facilisis magna etiam tempor orci. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Sed elementum tempus egestas sed. In egestas erat imperdiet sed euismod nisi porta lorem mollis.',
            'playlist'  => "<div style='padding:56.25% 0 0 0;position:relative;'><iframe src='https://vimeo.com/showcase/7975335/embed' allowfullscreen frameborder='0' style='position:absolute;top:0;left:0;width:100%;height:100%;'></iframe></div>",
            'video'     => '<iframe width="100%" height="550" src="https://www.youtube.com/embed/DXUUqr3AFKs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        ]);
        $c1->styles()->attach(2);

        $c1 = Course::create([
            'title'     => 'Bachata Parejas',
            'slug'      => 'bachata-parejas',
            'image'     => 'https://images.unsplash.com/photo-1607857313083-afa39d2c4986?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1024&ixlib=rb-1.2.1&q=80&w=1024',
            'level'     => 'beginner',
            'premium'   =>  true,
            'type'      => 'partnerwork',
            'duration'  => '08:24',
            'excerpt'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab vero nesciunt inventore odit animi nulla iste tempora error esse magnam, tempore fuga! Amet debitis recusandae animi expedita eveniet ratione inventore.',
            'content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sodales ut etiam sit amet nisl purus in mollis. Sit amet justo donec enim diam. Felis imperdiet proin fermentum leo vel orci porta non. Euismod in pellentesque massa placerat duis. Mus mauris vitae ultricies leo integer. Pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna. Eget mi proin sed libero enim sed faucibus turpis. Viverra maecenas accumsan lacus vel. Sed id semper risus in hendrerit gravida rutrum. Velit dignissim sodales ut eu sem. Mi ipsum faucibus vitae aliquet nec ullamcorper sit. Sem fringilla ut morbi tincidunt augue interdum velit. Vel elit scelerisque mauris pellentesque pulvinar pellentesque. At volutpat diam ut venenatis. Magna fermentum iaculis eu non. At in tellus integer feugiat scelerisque. Enim sit amet venenatis urna cursus eget nunc scelerisque viverra. Congue nisi vitae suscipit tellus mauris a diam maecenas. Ornare arcu dui vivamus arcu felis bibendum ut tristique et. Pharetra massa massa ultricies mi quis. Consequat interdum varius sit amet mattis. Sed risus ultricies tristique nulla aliquet enim. Nibh nisl condimentum id venenatis a. Enim facilisis gravida neque convallis a cras semper. Donec enim diam vulputate ut pharetra sit amet aliquam. Id volutpat lacus laoreet non curabitur gravida arcu ac tortor. Iaculis nunc sed augue lacus viverra vitae congue eu consequat. Sed risus pretium quam vulputate dignissim suspendisse in est. Risus in hendrerit gravida rutrum quisque. Tincidunt praesent semper feugiat nibh sed pulvinar proin. Non nisi est sit amet facilisis magna etiam tempor orci. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Sed elementum tempus egestas sed. In egestas erat imperdiet sed euismod nisi porta lorem mollis.',
            'playlist'  => "<div style='padding:56.25% 0 0 0;position:relative;'><iframe src='https://vimeo.com/showcase/7975335/embed' allowfullscreen frameborder='0' style='position:absolute;top:0;left:0;width:100%;height:100%;'></iframe></div>",
            'video'     => '<iframe width="100%" height="550" src="https://www.youtube.com/embed/XByiHpUvrj0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        ]);
        $c1->styles()->attach(1);

        $c1 = Course::create([
            'title'     => 'Lady Styling Bachata',
            'slug'      => 'lady-styling-bachata',
            'image'     => 'https://picsum.photos/800/800',
            'level'     => 'intermediate',
            'premium'   =>  true,
            'type'      => 'lady-styling',
            'duration'  => '00:25',
            'excerpt'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, accusantium velit natus saepe quam, illum consequatur praesentium eveniet culpa impedit optio aliquid, qui facere sunt ab at veniam autem placeat!',
            'content'   => 'Ornare arcu dui vivamus arcu felis bibendum ut tristique et. Pharetra massa massa ultricies mi quis. Consequat interdum varius sit amet mattis. Sed risus ultricies tristique nulla aliquet enim. Nibh nisl condimentum id venenatis a. Enim facilisis gravida neque convallis a cras semper. Donec enim diam vulputate ut pharetra sit amet aliquam. Id volutpat lacus laoreet non curabitur gravida arcu ac tortor. Iaculis nunc sed augue lacus viverra vitae congue eu consequat. Sed risus pretium quam vulputate dignissim suspendisse in est. Risus in hendrerit gravida rutrum quisque. Tincidunt praesent semper feugiat nibh sed pulvinar proin. Non nisi est sit amet facilisis magna etiam tempor orci. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Sed elementum tempus egestas sed. In egestas erat imperdiet sed euismod nisi porta lorem mollis.',
            'playlist'  => "<div style='padding:56.25% 0 0 0;position:relative;'><iframe src='https://vimeo.com/showcase/7975335/embed' allowfullscreen frameborder='0' style='position:absolute;top:0;left:0;width:100%;height:100%;'></iframe></div>",
            'video'     => '<iframe width="100%" height="550" src="https://www.youtube.com/embed/0yZatBxIqVk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        ]);
        $c1->styles()->attach(1);

        $c1 = Course::create([
            'title'     => 'Reggaeton',
            'slug'      => 'reggaeton',
            'image'     => 'https://images.unsplash.com/photo-1607952847954-4d55e9884d1f?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1024&ixlib=rb-1.2.1&q=80&w=1024',
            'level'     => 'beginner',
            'premium'   =>  true,
            'type'      => 'body-movement',
            'duration'  => '09:33',
            'excerpt'   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem architecto, doloremque aliquid pariatur, doloribus tempora ad provident accusamus exercitationem, consectetur nesciunt officiis ipsam repellat voluptates. Soluta recusandae eius enim sed.',
            'content'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sodales ut etiam sit amet nisl purus in mollis. Sit amet justo donec enim diam. Felis imperdiet proin fermentum leo vel orci porta non. Euismod in pellentesque massa placerat duis. Mus mauris vitae ultricies leo integer. Pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna. Eget mi proin sed libero enim sed faucibus turpis. Viverra maecenas accumsan lacus vel. Sed id semper risus in hendrerit gravida rutrum. Velit dignissim sodales ut eu sem. Mi ipsum faucibus vitae aliquet nec ullamcorper sit. Sem fringilla ut morbi tincidunt augue interdum velit. Vel elit scelerisque mauris pellentesque pulvinar pellentesque. At volutpat diam ut venenatis. Magna fermentum iaculis eu non. At in tellus integer feugiat scelerisque. Enim sit amet venenatis urna cursus eget nunc scelerisque viverra. Congue nisi vitae suscipit tellus mauris a diam maecenas. Ornare arcu dui vivamus arcu felis bibendum ut tristique et. Pharetra massa massa ultricies mi quis. Consequat interdum varius sit amet mattis. Sed risus ultricies tristique nulla aliquet enim. Nibh nisl condimentum id venenatis a. Enim facilisis gravida neque convallis a cras semper. Donec enim diam vulputate ut pharetra sit amet aliquam. Id volutpat lacus laoreet non curabitur gravida arcu ac tortor. Iaculis nunc sed augue lacus viverra vitae congue eu consequat. Sed risus pretium quam vulputate dignissim suspendisse in est. Risus in hendrerit gravida rutrum quisque. Tincidunt praesent semper feugiat nibh sed pulvinar proin. Non nisi est sit amet facilisis magna etiam tempor orci. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Sed elementum tempus egestas sed. In egestas erat imperdiet sed euismod nisi porta lorem mollis.',
            'playlist'  => "<div style='padding:56.25% 0 0 0;position:relative;'><iframe src='https://vimeo.com/showcase/7975335/embed' allowfullscreen frameborder='0' style='position:absolute;top:0;left:0;width:100%;height:100%;'></iframe></div>",
            'video'     => '<iframe width="100%" height="550" src="https://www.youtube.com/embed/u8ZsUivELbs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        ]);
        $c1->styles()->attach(4);
    }
}


