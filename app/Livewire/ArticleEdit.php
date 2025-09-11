<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class ArticleEdit extends Component
{
    use WithFileUploads;

    public $article, $categories, $title, $content, $category_id, $status, $image;

    public function mount($slug)
    {
        $this->article = Article::where('slug', $slug)->first();
        $this->categories = Category::all();
        $this->title = $this->article->title;
        $this->category_id = $this->article->category_id;
        $this->status = $this->article->status;
        $this->content = $this->article->content;
    }


    public function render()
    {
        return view('livewire.article-edit');
    }

    public function rules() {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:draft,published',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048', // Optional image upload
        ];
    }

    public function messages() {
        return [
            'title.required' => 'The title field is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title must not exceed 255 characters.',
            'content.required' => 'The content field is required.',
            'content.string' => 'The content must be a string.',
            'category_id.required' => 'The category field is required.',
            'category_id.exists' => 'The selected category is invalid.',
            'status.required' => 'The status field is required.',
            'status.in' => 'The selected status is invalid.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: png, jpg, jpeg.',
            'image.max' => 'The image size must not exceed 2MB.',
        ];
    }

    public function handleEdit() {
        $this->validate();

        $new_file_name = $this->article->image;
        $old_file_name = $this->image;

        if ($old_file_name) {
            $new_file_name = time() . '_' . $old_file_name->getClientOriginalName();
            Storage::disk('public')->putFileAs('articles', $old_file_name, $new_file_name);
        }

        $article = Article::find($this->article->id);
        $article->title = $this->title;
        $article->category_id = $this->category_id;
        $article->status = $this->status;
        $article->content = $this->content;
        $article->image = 'articles/' . $new_file_name;
        $article->slug = Str::slug($this->title);
        $article->save();

        session()->flash('success', 'Article updated successfully!');
        return redirect()->route('article');
    }
}
