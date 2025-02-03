<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name', 
        'address', 
        'dob', 
        'city', 
        'state', 
        'phone', 
        'email', 
        'area_of_interest', 
        'skill_level', 
        'others', 
        'cover_letter', 
        'why_we_hire', 
        
    ];

}
