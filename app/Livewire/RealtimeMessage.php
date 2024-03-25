<?php

namespace App\Livewire;

use App\Events\SendRealtimeMessage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class RealtimeMessage extends Component
{
    use LivewireAlert;

    public string $message;

    public function triggerEvent(): void
    {
        event(new SendRealtimeMessage($this->message));
        $this->message = '';
    }

    public $listeners = ['echo:md-channel,SendRealtimeMessage' => 'handleRealtimeMessage'];

    public function handleRealtimeMessage($message): void
    {
        $this->alert('success', $message['message']);
    }

    public function render()
    {
        return view('livewire.realtime-message');
    }
}
