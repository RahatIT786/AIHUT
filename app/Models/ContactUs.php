<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_name',
        'company_name',
        'email',
        'phone',
        'city',
        'state',
        'country',
        'partnership_type',
        'message',
    ];
}
