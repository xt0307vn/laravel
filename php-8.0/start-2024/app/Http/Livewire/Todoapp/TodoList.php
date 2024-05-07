<?php

namespace App\Http\Livewire\Todoapp;

use Livewire\Component;

class TodoList extends Component
{

    public $todos = null;

    public function mount($todos = []) {
        $this->todos = $todos;
    }

    public function render()
    {
        return view('livewire.todoapp.todo-list');
    }
}
