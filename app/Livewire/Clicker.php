<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public $username = "apelido de papai";

    public function createNewUser() 
    {
        User::create([
            'name' => "Test user 3",
            'email' => "test3@tes.com",
            'password' => "111222333",
        ]);

        

    }
    
    public function render()
    {
        $title = "teste";
        $users = User::all();

        return view('livewire.clicker', 
        [
            'title' => $title,
            'users' => $users,
        ]);
    }
};