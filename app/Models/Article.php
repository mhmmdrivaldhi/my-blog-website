<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $fillable = [
        'title',
        'content',
        'category_id',
        'status',
        'image',
        'slug',
    ];

    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
