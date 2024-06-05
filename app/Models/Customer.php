<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Customer extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'customer';

        protected $fillable = [
            'name', 'email','area','province','country','city','password','number', 'lname','account_status'
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];


        public function tendors()
        {
            return $this->hasMany(Tendor::class);
        }
        public function tendor_requests()
        {
            return $this->hasMany(Tendor_request::class);
        }
    }