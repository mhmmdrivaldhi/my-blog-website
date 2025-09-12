<?php

namespace App\Livewire;

use Livewire\Component;

class HomaPage extends Component
{
    public function render()
    {
        return view('livewire.homa-page')->layout('layouts.blog');
    }
}
