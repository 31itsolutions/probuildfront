<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $tabel = 'categories';
    protected $fillable = [
        'category', 
        'priority', 
        'category_description',
        'category_icon',
    ];

    public function getCategoryIconUrlAttribute()
    {
        return env('IMG_URL')."storage/category_icon/".$this->category_icon ;
    }
}
