<?php

namespace App\Livewire;

use App\Models\Message;
use App\Services\Ai\ChatBot;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Chat extends Component
{
    public string $prompt;
    public array $messages = [];

    public function mount()
    {
        $this->takeMessages();
    }

    public function render(): View
    {
        return view('livewire.chat')->layout('layouts.app');
    }

    public function submit()
    {
        $this->validate(['prompt' => 'required']);

        Message::create(['msg' => $this->prompt, 'user_id' => auth()->id()]);

        Message::create(['msg' => ChatBot::request($this->prompt), 'user_id' => auth()->id(), 'is_reply' => true]);

        $this->takeMessages();
    }

    public function clear()
    {
        Message::whereUserId(auth()->id())->delete();
        $this->takeMessages();
    }

    private function takeMessages()
    {
        $this->messages = Message::query()->whereUserId(auth()->id())->get()->toArray();
    }
}
