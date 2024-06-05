<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Add_image extends Model
{
    use HasFactory;


    protected $fillable = [
        'add_image', 
     
 
    ];
    public function getAddImageUrlAttribute()
    {
        return env('IMG_URL')."storage/app/public/advertisement_images/".$this->add_image;
    }
}
