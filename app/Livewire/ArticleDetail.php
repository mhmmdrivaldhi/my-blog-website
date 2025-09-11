<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Carbon;
use Livewire\Component;

class ArticleDetail extends Component
{
    public $slug, $article;
    public function mount($slug)
    {
        $this->slug = $slug;
        $this->article = Article::where('slug', $this->slug)->first();
        $this->article->publish_date = Carbon::parse($this->article->updated_at)->locale('en')->translatedFormat('l, d F Y');

        if (!$this->article) {
            abort(404, 'Article Not Found');
        }
    }

    public function render()
    {
        return view('livewire.article-detail');
    }
}
