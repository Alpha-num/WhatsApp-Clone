<?php

namespace App\Livewire\Chat;

use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChatWindow extends Component
{
    public $selectedUserId;
    public $reciever;
    public $message;
    public $currentUserId;

    protected $listeners = ['user-selected' => 'selectedUser', 
    'current-user' => 'getCurrentUserID'];

    public function selectedUser(User $user){
        $this->reciever =  $user;
    }
    public function getCurrentUserID($userId){
        $this->currentUserId = $userId;
        
    }


    public function sendMessage(){
        Message::create([
            'sender_id' => $this->currentUserId,
            'reciever_id' => $this->reciever->id,
            'message' => $this->message
        ]);
        $this->message = '';
        
    }
    
    public function render()
    {
        if($this->reciever){
            $reciever = $this->reciever;
            $chats = Message::where('sender_id', $this->currentUserId)
            ->where('reciever_id', $this->reciever->id)
            ->get();
        }else{
            $reciever = null;
            $chats = collect();
        }
    
        return view('livewire.chat.chat-window')->with([
            'chats' => $chats,
            'reciever' => $reciever
        ]);
    }
}