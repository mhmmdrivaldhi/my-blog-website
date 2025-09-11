<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;

class ArticlePage extends Component
{
    public $article;

    public function mount(Article $article)
    {
        $this->article = Article::with('category')->orderBy('created_at', 'desc')->get()->map(function($item) {
            $item->content = Str::limit($item->content, 100, '...');
            $item->publish_date = Carbon::parse($item->updated_at)->locale('en')->translatedFormat('l, d F Y');
            return $item;
        });

    }

    public function render()
    {
        return view('livewire.article-page');
    }
}
