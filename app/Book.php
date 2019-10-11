<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['category_id', 'title', 'author', 'image', 'description', 'link', 'featured'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
