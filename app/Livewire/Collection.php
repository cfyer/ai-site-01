<?php

namespace App\Livewire;

use App\Models\Art;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Collection extends Component
{
    public object $arts;
    public function mount()
    {
        $this->arts = Art::whereUserId(auth()->id())->orderByDesc('id')->get();
    }

    public function render(): View
    {
        return view('livewire.collection')->layout('layouts.app');
    }
}
