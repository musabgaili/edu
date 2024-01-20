<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    
    protected $casts =[
        'content'=> 'json',
        'title'=>'json'
    ];

    protected $translatable = [ 'title', 'content',];
    
}
