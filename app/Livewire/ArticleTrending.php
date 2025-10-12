<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Carbon;
use Livewire\Component;

class ArticleTrending extends Component
{
    public $articles;
    public function mount()
    {
        $this->articles = Article::where('status','published')->where('is_trending', 1)->limit(3)->get()->map(function($article) {
            $article->publish_date = Carbon::parse($article->updated_at)->locale('id')->translatedFormat('l, d F Y');
            return $article;
        }
);
    }
    public function render()
    {
        return view('livewire.article-trending')->layout('layouts.blog');
    }
}
