<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable=[
        'owner_name',
        'company_name',
        'mobile',
        'city',
        'state',
        'country',
        'email',
        'partership_type',
        'email_verified_at',
        'user_status',
        'password',
        'pincode',
        'hear_about',
        'document_type',
        'document_path',
        'address',

    ];

    protected $hidden=['password','remember_token'];

    protected $casts=[
        'email_verified_at'=>'datetime'
    ];
}
