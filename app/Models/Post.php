<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'slug',
        'content',
        'short_desc',
        'type',
        'user_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
