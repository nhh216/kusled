<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    const TYPE_PRODUCT = 'PRODUCT';
    const TYPE_POST = 'POST';

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'image',
        'type'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
