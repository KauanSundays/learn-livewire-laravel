<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule; 
use App\Livewire\request;

class Clicker extends Component
{
    #[Rule('required|min:2|max:50')] //Necessidades para poder enviar
    public $name;

    #[Rule('required|email|unique:users')] //Necessidades para poder enviar
    public $email;

    #[Rule('required|min:2')] //Necessidades para poder enviar
    public $password;
    
    
    public function createNewUser() 
    {
        $this->validate([
            'name' => 'required|min:2|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ]);
        
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

    
        $this->reset('name','email','password');

        request->session()->flash('success', 'Usuario criado!!');

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