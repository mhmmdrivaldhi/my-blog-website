<?php

namespace App\Livewire;

use Livewire\Component;

class FooterBlog extends Component
{
    public function render()
    {
        return view('livewire.footer-blog')->layout('layouts.blog');
    }
}
