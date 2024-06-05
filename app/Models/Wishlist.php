<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
      protected $tabel = 'wishlists';
    protected $fillable = [
        'user_id',
        'business_id',      
    ];
}
