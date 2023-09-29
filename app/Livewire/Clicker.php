<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public function handleClick() {
        dump("Clicked");
    }
    
    public function render()
    {
        $title = "teste";
        $users = User::all();

        return view('livewire.clicker', 
    [
        'title' => $title,
        'users' => $users
    ]);
    }
};