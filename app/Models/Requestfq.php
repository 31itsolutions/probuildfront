<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requestfq extends Model
{
    // use HasFactory;


    protected $fillable = [
        'vendor_id',
        'customer_id',
        'name', 
        'email', 
        'message',
        
 
    ];
    
}
