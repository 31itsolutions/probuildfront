<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tendor extends Model
{
    use HasFactory;

    public $table = "tendors";


    protected $fillable = [
        'name', 
        'email', 
        'lname',
        'number', 
        'address_1',
        'address_2', 
        'state',
        'zip',
        'city',
        'end_date',
        'category',
        'tender_description'
    ];
    

    public function customer()
    {
    return $this->belongsTo(Customer::class);
    }

}
