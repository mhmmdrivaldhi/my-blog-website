<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ArtikelDelete extends Component
{
    public $id;

    public function mount($id)
    {
        $this->id = $id;
    }

    public function handleDelete()
    {
        $artikel = Article::find($this->id);

        if ($artikel->image != null) {
            Storage::disk('public')->delete('articles/' . $artikel->image);
        }

        $artikel->delete();
        session()->flash('success', 'Article deleted successfully.');

        return redirect()->route('article');
    }

    public function render()
    {
        return view('livewire.artikel-delete');
    }
}
