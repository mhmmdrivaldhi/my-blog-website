<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactBlog extends Component
{
    public $name, $email, $subject, $message;
    public function sendMessage() {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Send to Email
        Mail::raw(
            "Message from: ({$this->email})\n\nSubject: {$this->subject}\n\n{$this->message}",
            function($mail) {
                $mail->to('mhmmmdrivaldhi10@gmail.com')
                        ->subject('New Message from Blog Website');
            }
        );

        $this->reset(['name', 'email', 'subject', 'message']);
        session()->flash('success', 'Your message has been sent successfully!');
        return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.contact-blog')->layout('layouts.blog');
    }
}
