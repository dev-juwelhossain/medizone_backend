<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    //protected $table = "";
    protected $fillable = [
        'name',
        'degree',
        'specialized',
        'experience',
        'hospital',
        'appointment_time',
        'address',
        'consultation_fee',
        'contact',
        'abount_doctor',
        'doctors_cat',
        'e_hospital',
        'e_degree',
        'e_experience_year',
    ];
}
