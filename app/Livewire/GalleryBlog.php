<?php

namespace App\Livewire;

use Livewire\Component;

class GalleryBlog extends Component
{
    public $images;
    public function mount(){
        $this->images = [
            [
                'file' => 'easy-run.jpg',
                'title' => 'Easy Run 5 kilometers',
                'category' => 'Sport'
            ],
            [
                'file' => 'hiking-1.jpg',
                'title' => 'Climbing Mount Luhur Bogor',
                'category' => 'Hiking'
            ],
            [
                'file' => 'hiking-2.jpg',
                'title' => 'Sunrise towards the peak of Mount Merbabu',
                'category' => 'Hiking'
            ],
            [
                'file' => 'mount-view-1.jpg',
                'title' => 'Sunrise on Mount Luhur Bogor',
                'category' => 'Photography'
            ],
            [
                'file' => 'mount-view-2.jpg',
                'title' => 'Morning vibes on Mount Luhur Bogor',
                'category' => 'Photography'
            ],
            [
                'file' => 'photograpy-1.jpg',
                'title' => 'The evening atmosphere in Malioboro',
                'category' => 'Photography'
            ],
            [
                'file' => 'body-building-1.jpg',
                'title' => 'Exercises to increase muscle mass',
                'category' => 'Sport'
            ],
            [
                'file' => 'tech-2.jpg',
                'title' => 'Web Development',
                'category' => 'Technology'
            ],
            [
                'file' => 'trail-run-1.jpg',
                'title' => 'Trail running at Mount Gede',
                'category' => 'Hiking'
            ],
            [
                'file' => 'trail-run-2.jpg',
                'title' => 'Trail running at Mount Pangrango',
                'category' => 'Hiking'
            ],
            [
                'file' => 'travelling-1.jpg',
                'title' => 'Borobudur Temple Magelang Central Java',
                'category' => 'Travelling'
            ],
            [
                'file' => 'travelling-2.jpg',
                'title' => 'Gili Trawangan Lombok West Nusa Tenggara',
                'category' => 'Travelling'
            ],
            [
                'file' => 'tech-1.jpg',
                'title' => 'Creating an API service for a Backend application',
                'category' => 'Technology'
            ],
        ];
    }
    public function render()
    {
        return view('livewire.gallery-blog')->layout('layouts.blog');
    }
}
