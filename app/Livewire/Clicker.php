<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public $name;
    public $email;
    public $password;
    
    
    public function createNewUser() 
    {
        $this->validate([
            'name' => 'required|min:2|max:50',
        ])
        
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

    

    }
    
    public function render()
    {
        $users = User::all();

        return view('livewire.clicker', 
        [
            'users' => $users,
        ]);
    }
};