<?php

namespace App\Http\Livewire\Forms\Components;

use App\Models\User;
use Livewire\Component;

class Select extends Component
{
    public $ModelGen,$modelID; //select
    public $laClase = 'usuario';

    public function mount()
    {
        $this->ModelGen = User::all();
    }

    public function updated()
    {
        dd($this->modelID);
    }
    public function render()
    {
        return view('livewire.forms.components.select');
    }
}
