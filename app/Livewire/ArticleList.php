<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Str;

class ArticleList extends Component
{
    public $articles;
    public function mount() {
        $this->articles = Article::where('status', 'published' )->limit(5)->get()->map(function($article) {
            $article->publish_date = Carbon::parse($article->updated_at)->locale('id')->translatedFormat('l, d F Y');
            $article->content = \Illuminate\Support\Str::limit($article->content, 250, '...');
            return $article;
        });
    }
    public function render()
    {
        return view('livewire.article-list')->layout('layouts.blog');
    }
}
