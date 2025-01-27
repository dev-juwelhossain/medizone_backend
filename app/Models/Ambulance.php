<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ambulance extends Model
{
    //
    protected $fillable=[
        'ambulance_picture',
        'name',
        'location',
        'phone_number',
    ];
}
