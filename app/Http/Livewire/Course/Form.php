<?php

namespace App\Http\Livewire\Course;

use App\Models\Course;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Form extends Component
{
    use WithFileUploads;

    public $course;
    public $action;

    public $title;    
    public $slug;
    public $tagline;
    public $tags;
    public $excerpt;
    public $content;
    public $video;
    public $playlist;
    public $level;
    public $premium;
    public $live;
    public $facebook_pixel;
    public $type;
    public $duration;
    public $order;
    public $thumbnail;
    public $portrait;
    public $thumbnailTemp;
    public $portraitTemp;
    public $instructors;
    public $styles;
    
    public function add()
    {
        $this->validate([
            'title'     => 'required',
            'duration'  => 'nullable|date_format:H:i:s',
        ]);
        
        $course = Course::create([
            'title'     => $this->title,
            'tagline'   => $this->tagline,
            'tags'      => $this->tags,
            'excerpt'   => $this->excerpt,
            'content'   => $this->content,
            'video'     => $this->video,
            'playlist'  => $this->playlist,
            'level'     => $this->level,
            'premium'   => $this->premium ?? 0,
            'is_live'   => $this->live ?? 0,
            'type'      => $this->type,
            'duration'  => $this->duration,
            'order'     => $this->order,
            'thumbnail' => $this->thumbnailTemp,
            'portrait'  => $this->portraitTemp,
            'facebook_pixel'=> $this->facebook_pixel,
        ]);

        if ($this->instructors) {
            $course->instructors()->attach($this->instructors);    
        }
        if ($this->styles) {
            $course->styles()->attach($this->styles);
        }
        
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
            'slug'      => $this->slug,
            'tagline'   => $this->tagline,
            'tags'      => $this->tags,
            'excerpt'   => $this->excerpt,
            'content'   => $this->content,
            'video'     => $this->video,
            'playlist'  => $this->playlist,
            'level'     => $this->level,
            'premium'   => $this->premium ?? 0,
            'is_live'   => $this->live ?? 0,
            'type'      => $this->type,
            'duration'  => $this->duration,
            'order'     => $this->order,            
            'facebook_pixel' => $this->facebook_pixel,
        ]);
        
        if (!$this->thumbnail == null) {
            if ($this->course->thumbnail != $this->thumbnail) {                    
                $this->course->update([
                    'thumbnail'     => $this->thumbnailTemp
                ]);            
                $this->thumbnail = $this->thumbnailTemp;
            }
        }

        if (!$this->portrait == null) {
            if ($this->course->portrait != $this->portrait) {                    
                $this->course->update([
                    'portrait'     => $this->portraitTemp
                ]);            
                $this->thumbnail = $this->portraitTemp;
            }
        }

        if ($this->instructors) {
            $this->course->instructors()->sync($this->instructors);
        }
        if ($this->styles) {
            $this->course->styles()->sync($this->styles);
        }
            
        session()->flash('success', 'You have updated a course successfully');

        return redirect(route('course.index'));
    }

    public function updatedTitle()
    {        
        $this->slug = Str::slug($this->title, '-') . '-' . \Carbon\Carbon::now()->timestamp;
    }

    public function mount($course = null, $action = null)
    {

        if (isset($action)) {
            $this->action   = $action;
            $this->course   = $course;
            $this->title    = $course->title;
            $this->tagline  = $course->tagline;
            $this->tags     = $course->tags;
            $this->slug     = $course->slug;
            $this->excerpt  = $course->excerpt;
            $this->content  = $course->content;
            $this->thumbnail= $course->thumbnail;
            $this->portrait = $course->portrait;
            $this->video    = $course->video;
            $this->playlist = $course->playlist;
            $this->level    = $course->level;
            $this->premium  = $course->premium;
            $this->live     = $course->is_live;
            $this->type     = $course->type;
            $this->duration = $course->duration;
            $this->order    = $course->order;
            $this->facebook_pixel = $course->facebook_pixel;

        }
    }

    public function render()
    {
        return view('livewire.course.form');
    }
}
