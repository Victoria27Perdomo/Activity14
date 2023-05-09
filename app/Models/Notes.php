<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Author;
use App\Models\Category;

class Notes extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'author_id',
        'category_id',
        'title',
        'content',
        'date_time'
    ];

    public function author(){
        return $this->hasOne(Author::class);
    }

    public function category(){
        return $this->hasMany(Category::class);
    }
}
