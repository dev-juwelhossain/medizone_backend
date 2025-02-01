<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Singledoc extends Model
{
    protected $fillable = [
        's_doc_picture',
        's_doc_name',
        's_doc_location',
        's_doc_hospital',
        's_doc_position',
        's_doc_experience',
        
        's_doc_specialized',
        's_doc_degree',
    ];
}
