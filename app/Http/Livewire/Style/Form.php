<?php

namespace App\Http\Livewire\Style;

use App\Models\Style;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;

    public $action;
    public $style;
    public $name;
    public $slug;
    public $description;
    public $portrait;
    public $thumbnail;
    public $video;
    public $thumbnailTemp;
    public $portraitTemp;
    
    public function add()
    {
        $this->validate([
            'name'     => 'required',
        ]);

        Style::create([
            'name'          => $this->name,
            'slug'          => $this->slug,
            'description'   => $this->description,
            'portrait'      => $this->portrait,
            'thumbnail'     => $this->thumbnail,
            'video'         => $this->video,
        ]);

        session()->flash('success', 'Style created successfully.');

        return redirect(route('style.index'));
    }

    public function edit()
    {
        $this->style->update([
            'name'          => $this->name,
            'slug'          => $this->slug,
            'description'   => $this->description,
            'portrait'      => $this->portrait,
            'thumbnail'     => $this->thumbnail,
            'video'         => $this->video,
        ]);

        session()->flash('success', 'Style updated successfully.');

        return redirect(route('style.index'));
    }

    public function updatedThumbnail()
    {
        $this->validate([
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',            
        ]);
        $this->thumbnailTemp = $this->thumbnail->store('styles');      
        $this->thumbnail = $this->thumbnailTemp;
    }

    public function updatedPortrait()
    {
        $this->validate([            
            'portrait'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        $this->portraitTemp = $this->portrait->store('styles');      
        $this->portrait = $this->portraitTemp;
    }

    public function mount($style = null, $action = null)
    {        
        if (isset($action)) {
            $this->action = $action;            
            if ($style) {
                $this->style = $style;            
                $this->name = $style->name;
                $this->slug = $style->slug;
                $this->description = $style->description;
                $this->portrait = $style->portrait;
                $this->thumbnail = $style->thumbnail;
                $this->video = $style->video;
            }        
        }

    }

    public function render()
    {
        return view('livewire.style.form');
    }
}
