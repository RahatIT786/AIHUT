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
        'mail',
        'partership_type',
        'email_verified_at',
        'user_status',
    ];
}
