<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cmnt extends Model
{
    use HasFactory;


   
     protected $fillable =[

        
        'cmnt',
        'user_id',
        

    ];





}
