<?php

namespace App\Livewire;

use App\Models\Candidate;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Sorteio extends Component
{
    public $winner = null;

    public function render() : View
    {
        return view('livewire.sorteio');
    }

    public function run() : void//Ação que faz winner trocar para o nome
    {
        $winner = Candidate::query()->inRandomOrder()->first(); //query pra sortear
        $this->winner = $winner->name;
    }
}
