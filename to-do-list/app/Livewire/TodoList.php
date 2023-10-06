<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    public $name;  //name

    public function create()
    {
        dd($this->name); // name
    }
    public function render()
    {
        return view('livewire.todo-list');
    }
}
