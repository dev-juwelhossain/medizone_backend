<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospitals extends Model
{
    //
    
    protected $fillable =[
        'hospital_picture',
        'name',
        'location',
        'email',
        'phone_number',
        'about_hospital',
        'services',
        
    ];
}
