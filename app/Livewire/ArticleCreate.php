<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class ArticleCreate extends Component
{
    use WithFileUploads;

    public $categories, $title, $content, $category_id, $status, $image;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.article-create');
    }

    public function rules() {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:draft,published',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048', // Optional image upload
        ];
    }

    public function messages() {
        return [
            'title.required' => 'The title field is required.',
            'content.required' => 'The content field is required.',
            'category_id.required' => 'The category field is required.',
            'category_id.exists' => 'The selected category is invalid.',
            'status.required' => 'The status field is required.',
            'status.in' => 'The selected status is invalid.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: png, jpg, jpeg.',
            'image.max' => 'The image size must not exceed 2MB.',
        ];
    }

    public function handleSubmit()
    {
        $this->validate();

        $file = $this->image;
        $fileName = time() . '_' . $file->getClientOriginalName();

        Storage::disk('public')->putFileAs('articles', $file, $fileName);

        Article::create([
            'title' => $this->title,
            'content' => $this->content,
            'category_id' => $this->category_id,
            'status' => $this->status,
            'image' => 'articles/' . $fileName,
            'slug' => Str::slug($this->title),
        ]);

        session()->flash('success', 'Article created successfully.');
        return redirect()->route('article');
    }
}
