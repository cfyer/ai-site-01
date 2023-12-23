<?php

namespace App\Livewire;

use App\Services\Ai\ImageGeneration;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Generate extends Component
{
    public string $prompt;
    public array $arts = [];

    public function render(): View
    {
        return view('livewire.generate')->layout('layouts.app');
    }

    public function generate()
    {
        $this->validate(['prompt' => 'required|min:3']);
        $this->arts = ImageGeneration::request($this->prompt);
        if (sizeof($this->arts) < 1) {
            $this->setErrorBag(['prompt' => 'error. try again later.']);
        }else{
            $this->resetErrorBag();
            $this->resetValidation();
        }
    }
}
