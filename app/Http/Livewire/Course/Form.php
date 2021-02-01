<?php

namespace App\Http\Livewire\Course;

use App\Models\Course;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;

    public $course;
    public $action;

    public $title;
    public $slug;
    public $excerpt;
    public $content;
    public $video;
    public $playlist;
    public $level;
    public $premium;
    public $facebook_pixel;
    public $type;
    public $duration;
    public $order;
    public $thumbnail;
    public $portrait;
    public $thumbnailTemp;
    public $portraitTemp;
    
    public function add()
    {
        $this->validate([
            'title'     => 'required',
        ]);

        Course::create([
            'title'     => $this->title,
            'excerpt'   => $this->excerpt,
            'content'   => $this->content,
            'video'     => $this->video,
            'playlist'  => $this->playlist,
            'level'     => $this->level,
            'premium'   => $this->premium ?? 0,
            'type'      => $this->type,
            'duration'  => $this->duration,
            'order'     => $this->order,
            'thumbnail' => $this->thumbnailTemp,
            'portrait'  => $this->portraitTemp,
            'facebook_pixel'=> $this->facebook_pixel,
        ]);

        session()->flash('success', 'You have created a course successfully');

        return redirect(route('course.index'));
    }

    public function updatedThumbnail()
    {
        $this->validate([
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',            
        ]);
        $this->thumbnailTemp = $this->thumbnail->store('courses');      
        $this->thumbnail = $this->thumbnailTemp;
    }

    public function updatedPortrait()
    {
        $this->validate([            
            'portrait'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        $this->portraitTemp = $this->portrait->store('courses');      
        $this->portrait = $this->portraitTemp;
    }
    
    public function edit()
    {
        $this->course->update([
            'title'     => $this->title,
            'excerpt'   => $this->excerpt,
            'content'   => $this->content,
            'video'     => $this->video,
            'playlist'  => $this->playlist,
            'level'     => $this->level,
            'premium'   => $this->premium ?? 0,
            'type'      => $this->type,
            'duration'  => $this->duration,
            'order'     => $this->order,
            'thumbnail' => $this->thumbnailTemp,
            'portrait'  => $this->portraitTemp,
            'facebook_pixel' => $this->facebook_pixel,
        ]);

        session()->flash('success', 'You have updated a course successfully');

        return redirect(route('course.index'));
    }



    public function mount($course = null, $action = null)
    {

        if (isset($action)) {
            $this->action = $action;
            $this->course = $course;
            $this->title = $course->title;
            $this->slug = $course->slug;
            $this->excerpt = $course->excerpt;
            $this->content = $course->content;
            $this->image = $course->image;
            $this->video = $course->video;
            $this->playlist = $course->playlist;
            $this->level = $course->level;
            $this->premium = $course->premium;
            $this->facebook_pixel = $course->facebook_pixel;
            $this->type = $course->type;
            $this->duration = $course->duration;
            $this->order = $course->order;

        }
    }

    public function render()
    {
        return view('livewire.course.form');
    }
}
