<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Instructor;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;

    public $action;
    public $instructor;
    public $first_name;
    public $last_name;
    public $nickname;
    public $slug;
    public $bio;
    public $image;
    public $thumbnail;
    public $portrait;
    public $video;
    public $birthday;
    public $beginning;
    public $origin;
    public $facebook;
    public $instagram;
    public $twitter;
    public $tiktok;
    public $youtube;
    public $phone;
    public $email;
    public $thumbnailTemp;
    public $portraitTemp;
    public $imageTemp;


    public function add()
    {
        $this->validate([
            'first_name'     => 'required',
            'birthday'     => 'nullable|date',
            'beginning'    => 'nullable|date',
        ]);
            
        Instructor::create([
            'first_name'=> $this->first_name,
            'last_name' => $this->last_name,
            'nickname'  => $this->nickname,
            'slug'      => $this->slug,
            'bio'       => $this->bio,
            'image'     => $this->image,
            'portrait'  => $this->portrait,
            'thumbnail' => $this->thumbnail,
            'video'     => $this->video,
            'birthday'  => $this->birthday,
            'beginning' => $this->beginning,
            'origin'    => $this->origin,
            'facebook'  => $this->facebook,
            'instagram' => $this->instagram,
            'twitter'   => $this->twitter,
            'tiktok'    => $this->tiktok,
            'youtube'   => $this->youtube,
            'phone'     => $this->phone,
            'email'     => $this->email,
        ]);

        session()->flash('success', 'Instructor created successfully.');

        return redirect(route('instructor.index'));
    }

    public function edit()
    {
        $this->validate([
            'birthday'     => 'nullable|date',
            'beginning'    => 'nullable|date',
        ]);

        $this->instructor->update([
            'first_name'=> $this->first_name,
            'last_name' => $this->last_name,
            'nickname'  => $this->nickname,
            'slug'      => $this->slug,
            'bio'       => $this->bio,
            'image'     => $this->image,
            'portrait'  => $this->portrait,
            'thumbnail' => $this->thumbnail,
            'video'     => $this->video,
            'birthday'  => $this->birthday,
            'beginning' => $this->beginning,
            'origin'    => $this->origin,
            'facebook'  => $this->facebook,
            'instagram' => $this->instagram,
            'twitter'   => $this->twitter,
            'tiktok'    => $this->tiktok,
            'youtube'   => $this->youtube,
            'phone'     => $this->phone,
            'email'     => $this->email,
        ]);

        session()->flash('success', 'Instructor updated successfully.');

        return redirect(route('instructor.index'));
    }

    public function updatedImage()
    {
        $this->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        $this->imageTemp = $this->image->store('instructors');
        $this->image = $this->imageTemp;
    }

    public function updatedThumbnail()
    {
        $this->validate([
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        $this->thumbnailTemp = $this->thumbnail->store('instructors');
        $this->thumbnail = $this->thumbnailTemp;
    }

    public function updatedPortrait()
    {
        $this->validate([
            'portrait'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        $this->portraitTemp = $this->portrait->store('instructors');
        $this->portrait = $this->portraitTemp;
    }

    public function mount($instructor = null, $action = null)
    {
        if (isset($action)) {
            $this->action = $action;
            if ($instructor) {
                $this->instructor = $instructor;
                $this->first_name = $instructor->first_name;
                $this->last_name  = $instructor->last_name;
                $this->nickname   = $instructor->nickname;
                $this->slug       = $instructor->slug;
                $this->bio        = $instructor->bio;
                $this->image      = $instructor->image;
                $this->thumbnail  = $instructor->thumbnail;
                $this->portrait   = $instructor->portrait;
                $this->video      = $instructor->video;
                $this->birthday   = $instructor->birthday;
                $this->beginning  = $instructor->beginning;
                $this->origin     = $instructor->origin;
                $this->facebook   = $instructor->facebook;
                $this->instagram  = $instructor->instagram;
                $this->twitter    = $instructor->twitter;
                $this->tiktok     = $instructor->tiktok;
                $this->youtube    = $instructor->youtube;
                $this->phone      = $instructor->phone;
                $this->email      = $instructor->email;
            }
        }
    }

    public function render()
    {
        return view('livewire.instructor.form');
    }
}
