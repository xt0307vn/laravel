<?php

namespace App\Http\Livewire\Todoapp;

use Livewire\Component;

class Index extends Component
{

    public $todos = [
        [
            'id' => 1,
            'name' => "Todo 1"
        ]
    ];
    public $name = "Trường";

    public function render()
    {
        return view('livewire.todoapp.index');
    }
}
