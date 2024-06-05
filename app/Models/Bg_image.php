<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bg_image extends Model
{
    use HasFactory;


    protected $fillable = [
        'login_image', 
        'home_image', 
        'customer_image',
        'vendor_image',
 
    ];
    public function getSubCategoryIconUrlAttribute()
    {
        return env('IMG_URL')."storage/app/public/banner_image/".$this->home_image;
    }
}
