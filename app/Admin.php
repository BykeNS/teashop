<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Admin extends Model
{


    protected $guard = 'admin';

    protected $fillable = [
        'name', 'email', 'password','is_admin'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
