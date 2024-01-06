<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Chat extends Component
{
    public string $prompt;

    public function render(): View
    {
        return view('livewire.chat')->layout('layouts.app');
    }

    public function submit()
    {
        $this->validate(['prompt' => 'required']);


    }
}
