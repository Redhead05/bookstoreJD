<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_name',
        'average_rating',
        'voters',
        'category_id',
        'author_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function author()
    {
        return $this->belongsTo('App\Models\Author');
    }


//filter scopes

    public function scopeFilterByName($query, $bookName)
    {
        return $query->where('book_name', 'like', '%' . $bookName . '%');
    }

    public function scopeFilterByAuthorId($query, $authorId)
    {
        return $query->where('author_id', $authorId);
    }
}
