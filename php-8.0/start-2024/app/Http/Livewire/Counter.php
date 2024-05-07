<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 5;
    public $numbers = [1,2,3,4,5,6];
    public $uKey = null;

    public function increase() {
        $this->count++;
    }

    public function decrease() {
        $this->count--;
    }

    public function redirectToTest() {
        return redirect()->route('test');
    }

    public function handleClickItem($key) {
        $this->uKey = $key;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
