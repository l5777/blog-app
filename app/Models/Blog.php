<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Blog extends Model
{
    use HasFactory;
     use Commentable;


     protected $fillable =[

        
        'description',
        'title',
        'image',
        'user_id',
        
        

    ];
}

