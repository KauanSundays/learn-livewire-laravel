<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Sorteio extends Component
{
    public $winner = null;

    public function render() : View
    {
        return view('livewire.sorteio');
    }

    public function run() //Ação que faz winner trocar para o nome
    {
        $this->winner = 'Silvio';
    }
}
