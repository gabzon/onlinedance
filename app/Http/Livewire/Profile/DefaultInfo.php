<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

class DefaultInfo extends Component
{
    public $user;
    public $show;
    public $name;
    public $email;
    public $gender;
    public $phone;
    public $birthday;
    public $bio;
    public $role;

    public function edit()
    {
        $this->validate([
            'birthday'  => 'nullable|date'
        ]);

        $this->user->update([
            'gender'    => $this->gender,
            'phone'     => $this->phone,
            'birthday'  => $this->birthday,
            'bio'       => $this->bio,
            'role'      => $this->role,            
        ]);

        session()->flash('success', 'User updated successfully!');
    }

    public function mount($user, $show = false)
    {
        if ($show) $this->show = $show; 

        if ($user) {
            $this->user = $user;
            $this->name = $user->name;
            $this->email = $user->email;
            $this->gender = $user->gender;
            $this->phone = $user->phone;
            $this->birthday = $user->birthday;
            $this->bio = $user->bio;
            $this->role = $user->role;            
        }
    }


    public function render()
    {
        return view('livewire.profile.default-info');
    }
}