<?php

namespace App\Livewire\Chat;

use App\Models\User;
use Livewire\Component;


class ChatList extends Component
{
    public $users;
    public $message;

    public $currentUserId;

    public function loadChatWindow($userId){
        $this->dispatch('user-selected', $userId);
        $this->dispatch('current-user', $this->currentUserId);
    }
    
    public function mount(){
        $this->currentUserId = 'testuser';

        $this->users = User::all();
        
        // session(['currentUser' => $this->currentUserId]);
    }



    public function render()
    {
        return view('livewire.chat.chat-list');
    }
}
